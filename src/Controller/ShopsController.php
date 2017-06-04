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
/**
 * Shops Controller
 *
 * @property \App\Model\Table\ShopsTable $Shops
 */
class ShopsController extends AppController
{
    public $helpers = ['Dala00/Upload.Upload'];
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $code = $this->request->query['code'];
        $shop = $this->Shops->find()
                            //->hydrate(true)
                            ->where(['Shops.code' => $code])
                            ->contain(['Nationals', 'States', 'Districts', 'TypeShops', 'Monies', 'OrderDetails', 'Pictures', 'Products', 'ShopCountViews', 'ShopInfos', 'ShopItems'])
                            ->toArray();
//var_dump($shop[0]);
        $this->set('shop', $shop[0]);
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

}
