<?php
namespace App\Controller\Admin;
//use phpFlickr;
use App\Controller\AppController;
//require_once(ROOT . '/'. 'vendor' . DS  . 'phpflickr' . DS . 'flickr_api.php');

/**
 * Shops Controller
 *
 * @property \App\Model\Table\ShopsTable $Shops
 */
class ShopsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Nationals', 'States', 'Districts', 'TypeShops']
        ];
        $shops = $this->paginate($this->Shops);

        $this->set(compact('shops'));
        $this->set('_serialize', ['shops']);
    }

    /**
     * View method
     *
     * @param string|null $id Shop id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shop = $this->Shops->get($id, [
            'contain' => ['Nationals', 'States', 'Districts', 'TypeShops', 'Monies', 'OrderDetails', 'Pictures', 'Products', 'ShopCountViews', 'ShopInfos', 'ShopItems']
        ]);

        $this->set('shop', $shop);
        $this->set('_serialize', ['shop']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shop = $this->Shops->newEntity();
        if ($this->request->is('post')) {
            $shop = $this->Shops->patchEntity($shop, $this->request->data);
            // Check validate post data
            if (!$shop->errors()) {
                // set ID flick to DB
                /*
                if ($this->request->data['img']['name']) {
                    $upload = upload_flickr($_FILES['img']["tmp_name"] , $this->request->data['img']['name']);
                    $shop['photoid'] = $upload['photoid'];
                    $shop['img'] = $upload['img'];
                }
                */
                if ($this->Shops->save($shop)) {
                    $this->Flash->success(__('The shop has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('The shop could not be saved. Please, try again.'));
        }
        $nationals = $this->Shops->Nationals->find('list', ['limit' => 200]);
        $states = $this->Shops->States->find('list', ['limit' => 200]);
        $districts = $this->Shops->Districts->find('list', ['limit' => 2000]);
        $typeShops = $this->Shops->TypeShops->find('list', ['limit' => 200]);
        $this->set(compact('shop', 'nationals', 'states', 'districts', 'typeShops'));
        $this->set('_serialize', ['shop']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shop id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shop = $this->Shops->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shop = $this->Shops->patchEntity($shop, $this->request->data);
            // set ID flick to DB
            if (!$shop->errors()) {
                /*
                if ($this->request->data['img']['name']) {
                    if (isset($shop->photoid) && $shop->photoid) $upload = replace_flickr($shop->photoid, $_FILES['img']["tmp_name"],  $this->request->data['img']['name']);
                    else $upload = upload_flickr($_FILES['img']["tmp_name"] , $this->request->data['img']['name']);
                    $shop['photoid'] = $upload['photoid'];
                    $shop['img'] = $upload['img'];
                }
                */
                //if (!$this->request->data['img']['name']){ 
                //    unset($shop['img']);var_dump($this->request->data['img']['name']);
                //} 
                if ($this->Shops->save($shop)) { 
                    $this->Flash->success(__('The shop has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('The shop could not be saved. Please, try again.'));
        }
        $nationals = $this->Shops->Nationals->find('list', ['limit' => 200]);
        $states = $this->Shops->States->find('list', ['limit' => 200]);
        $districts = $this->Shops->Districts->find('list', ['limit' => 200]);
        $typeShops = $this->Shops->TypeShops->find('list', ['limit' => 200]);
        $this->set(compact('shop', 'nationals', 'states', 'districts', 'typeShops'));
        $this->set('_serialize', ['shop']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shop id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shop = $this->Shops->get($id);
        if ($this->Shops->delete($shop)) {
            $this->Flash->success(__('The shop has been deleted.'));
        } else {
            $this->Flash->error(__('The shop could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
     
    public function find_district($state_id = null)
    {
        $this->request->allowMethod(['get', 'ajax']);
        $this->autoRender = false;
        $districts = [];
        $state_id = $this->request->query['state_id'];
        $districts = $this->Shops->Districts->find('list', ['conditions' =>['state_id' => $state_id]]);
        $district = json_encode($districts);
        $this->response->type('json');
        $this->response->body($district);
        return $this->response;
    }
}
