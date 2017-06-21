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
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class SitesController extends AppController {
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
     public $paginate = [
        // Other keys here.
        'limit' => 4
    ];
    public $helpers = ['Dala00/Upload.Upload'];

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }
    public function index() {
        $shops = TableRegistry::get('Shops');
        //$this->loadModel('Shops');
        $searchtxt = isset($this->request->query['name']) ? $this->request->query['name'] : '';
        if ($this->request->is('get') || $searchtxt) {
            $query = $this->paginate(
                $shops->find()
                    ->select(['Shops.id', 'Shops.code', 'Shops.name',
                              'Shops.description', 'Shops.address',
                              'Shops.phone', 'Shops.phonehome', 'Shops.contactperson',
                              'Shops.img', 'Shops.type_shop_id', 'r.rating_number',
                              'r.total_points'])
                    //->hydrate(false)
                    ->join([
                        'd' => [
                            'table' => 'districts',
                            'type' => 'LEFT',
                            'conditions' => 'd.id = Shops.district_id',
                        ],
                        's' => [
                            'table' => 'states',
                            'type' => 'LEFT',
                            'conditions' => 's.id = Shops.state_id',
                        ],
                        'r' => [
                            'table' => 'ratings',
                            'type' => 'LEFT',
                            'conditions' => 'r.item_id = Shops.id',
                        ]
                    ])
                    ->where(['d.name =' => $searchtxt])
                    ->orWhere(['s.name =' => $searchtxt])
            );
        }
        $this->request->data['name'] = $searchtxt;
        $this->set(compact('query'));
        $this->set('_serialize', ['query']);
    }
    
    public function termsOfService() {
        
    }
    public function autocomplete() {
        if ($this->request->is('ajax')) {
            $this->autoRender = false;
            $this->loadModel('Districts');
            $this->loadModel('States');
            $name = $this->request->query['term'];
            $results_district = $this->Districts->find('all', [
                'conditions' => [ 'OR' => [
                    //'name LIKE' => $name . '%',
                    "MATCH(name) AGAINST ('{$name}' IN BOOLEAN MODE)"
                ]]
            ]);
            $results_state = $this->States->find('all', [
                'conditions' => [ 'OR' => [
                    //'name LIKE' => $name . '%',
                    "MATCH(name) AGAINST ('{$name}' IN BOOLEAN MODE)"
                ]]
            ]);
            $resultsArr = [];
            foreach ($results_district as $result) {
                 $resultsArr[] =['label' => $result['name'], 'value' => $result['name']];
            }
            foreach ($results_state as $result) {
                 $resultsArr[] =['label' => $result['name'], 'value' => $result['name']];
            }
            
            echo json_encode($resultsArr);
        } 
    }
}
