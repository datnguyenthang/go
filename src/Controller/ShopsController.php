<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Controller\Component\CookieComponent;
/**
 * Shops Controller
 *
 * @property \App\Model\Table\ShopsTable $Shops
 */
class ShopsController extends AppController
{
    public $helpers = ['Dala00/Upload.Upload'];
    
    public function initialize() {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Cookie');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->loadModel('Ratings');
        $code = $this->request->query['code'];
        $shop = $this->Shops->find()
                            //->hydrate(true)
                            ->where(['Shops.code' => $code])
                            ->contain(['Nationals', 'States', 'Districts', 'TypeShops', 'Monies', 'OrderDetails', 'Pictures', 'Products', 'ShopCountViews', 'ShopInfos', 'ShopItems'])
                            ->toArray();
//var_dump($shop[0]);
        $ratingRow = $this->Ratings->find()
                            ->hydrate(true)
                            ->where(['Ratings.item_id' => $shop[0]['id']])->first();
        $this->set('shop', $shop[0]);
        $this->set('ratingRow', $ratingRow);
        $this->set('_serialize', ['shop']);
    }

    /**
     * View method
     *
     * @param string|null $id Shop id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view()
    {
        $shop = $this->Shops->get($id, [
            'contain' => ['Nationals', 'States', 'Districts', 'TypeShops', 'Monies', 'OrderDetails', 'Pictures', 'Products', 'ShopCountViews', 'ShopInfos', 'ShopItems']
        ]);

        $this->set('shop', $shop);
        $this->set('_serialize', ['shop']);
    }
    public function rating() {
        if ($this->request->is('ajax')) {
            $this->autoRender = false;
            $ratingsTable = TableRegistry::get('Ratings');
            $ratingObject = $ratingsTable->newEntity();
            $this->loadModel('Ratings');
            if ($this->Cookie->read('isvote')) {
                $ratingRow = $ratingsTable->newEntity();
                $ratingRow->status = 'voted';
                echo json_encode($ratingRow);
            } else {
                
                $shopid = $this->request->query['itemid'];
                $point = $this->request->query['ratingPoints'];
                $ratingNum = 1;
                $rating = $this->Ratings->find()
                                ->hydrate(true)
                                ->where(['Ratings.item_id' => $shopid])->first();
                if (empty($rating)) {
                    $ratingObject->item_id = $shopid;
                    $ratingObject->rating_number = 1;
                    $ratingObject->total_points = $point;
                    $ratingObject->created = date('Y-m-d H:i:s');
                    $ratingObject->modified = date('Y-m-d H:i:s');
                    $ratingsTable->save($ratingObject);
                } else {
                    $rating->rating_number += 1;
                    $rating->total_points += $point;
                    $ratingsTable->save($rating);
                }
                $ratingRow = $this->Ratings->find()
                                ->hydrate(true)
                                ->where(['Ratings.item_id' => $shopid])->first();

                $this->Cookie->configKey('isvote', [
                        'path' => '/',
                        'expires' => '1 day'
                    ]);
                if ($ratingRow){
                    $ratingRow->average_rating = ROUND(($ratingRow->total_points / $ratingRow->rating_number),1);
                    $ratingRow->status = 'ok';
                    
                    $this->Cookie->write('isvote', '1');
                    
                } else {
                    $ratingRow->status = 'err';
                }

                //Return json formatted rating data
                echo json_encode($ratingRow);
            }
        }

    }
}