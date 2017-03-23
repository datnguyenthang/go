<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Filesystem\File;
//require_once(ROOT . '/'. 'vendor' . DS  . 'phpflickr' . DS . 'flickr_api.php');
/**
 * ShopItems Controller
 *
 * @property \App\Model\Table\ShopItemsTable $ShopItems
 */
class ShopItemsController extends AppController
{
    public $helpers = ['Dala00/Upload.Upload'];
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Shops']
        ];
        $shopItems = $this->paginate($this->ShopItems);

        $this->set(compact('shopItems'));
        $this->set('_serialize', ['shopItems']);
    }

    /**
     * View method
     *
     * @param string|null $id Shop Item id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shopItem = $this->ShopItems->get($id, [
            'contain' => ['Shops']
        ]);

        $this->set('shopItem', $shopItem);
        $this->set('_serialize', ['shopItem']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shopItem = $this->ShopItems->newEntity();
        if ($this->request->is('post')) {
            $shopItem = $this->ShopItems->patchEntity($shopItem, $this->request->data);
            
            if (!$shopItem->errors()) {
                /*
                // set ID flick to DB
                if ($this->request->data['img']['name']) {
                    $upload = upload_flickr($_FILES['img']["tmp_name"] , $this->request->data['img']['name']);
                    $shopItem['photoid'] = $upload['photoid'];
                    $shopItem['img'] = $upload['img'];
                }
                */
                if ($this->ShopItems->save($shopItem)) {
                    $this->Flash->success(__('The shop item has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('The shop item could not be saved. Please, try again.'));
        }
        $shops = $this->ShopItems->Shops->find('list', ['limit' => 200]);
        $tradetypes = $this->ShopItems->TradeTypes->find('list', ['limit' => 200]);
        $this->set(compact('shopItem', 'shops', 'tradetypes'));
        $this->set('_serialize', ['shopItem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shop Item id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shopItem = $this->ShopItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shopItem = $this->ShopItems->patchEntity($shopItem, $this->request->data);
            // set ID flick to DB
            if (!$shopItem->errors()) {
                /*
                if ($this->request->data['img']['name']) {
                    if (isset($shopItem->photoid) && $shopItem->photoid) $upload = replace_flickr($shopItem->photoid, $_FILES['img']["tmp_name"], $this->request->data['img']['name']);
                    else $upload = upload_flickr($_FILES['img']["tmp_name"] , $this->request->data['img']['name']);
                    $shopItem['photoid'] = $upload['photoid'];
                    $shopItem['img'] = $upload['img'];
                }
                */
                if ($this->request->data['img']['name']){
                    $file = new File(WWW_ROOT . $this->request->data['img_path'], false);
                    $file->delete();
                }
                if ($this->ShopItems->save($shopItem)) {
                    $this->Flash->success(__('The shop item has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
            }    
            $this->Flash->error(__('The shop item could not be saved. Please, try again.'));
        }
        $shops = $this->ShopItems->Shops->find('list', ['limit' => 200]);
        $tradetypes = $this->ShopItems->TradeTypes->find('list', ['limit' => 200]);
        $this->set(compact('shopItem', 'shops', 'tradetypes'));
        $this->set('_serialize', ['shopItem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shop Item id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shopItem = $this->ShopItems->get($id);
        if ($this->ShopItems->delete($shopItem)) {
            $file = new File(WWW_ROOT . 'img/upload/shops/'.$shopItem['shop_id'].'/shopitems/'. $shopItem['img'], false);
            $file->delete();
            $this->Flash->success(__('The shop item has been deleted.'));
        } else {
            $this->Flash->error(__('The shop item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
