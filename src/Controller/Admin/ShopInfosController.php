<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * ShopInfos Controller
 *
 * @property \App\Model\Table\ShopInfosTable $ShopInfos
 */
class ShopInfosController extends AppController
{

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
        $shopInfos = $this->paginate($this->ShopInfos);

        $this->set(compact('shopInfos'));
        $this->set('_serialize', ['shopInfos']);
    }

    /**
     * View method
     *
     * @param string|null $id Shop Info id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shopInfo = $this->ShopInfos->get($id, [
            'contain' => ['Shops']
        ]);

        $this->set('shopInfo', $shopInfo);
        $this->set('_serialize', ['shopInfo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shopInfo = $this->ShopInfos->newEntity();
        if ($this->request->is('post')) {
            $shopInfo = $this->ShopInfos->patchEntity($shopInfo, $this->request->data);
            if ($this->ShopInfos->save($shopInfo)) {
                $this->Flash->success(__('The shop info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shop info could not be saved. Please, try again.'));
        }
        $shops = $this->ShopInfos->Shops->find('list', ['limit' => 200]);
        $this->set(compact('shopInfo', 'shops'));
        $this->set('_serialize', ['shopInfo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shop Info id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shopInfo = $this->ShopInfos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shopInfo = $this->ShopInfos->patchEntity($shopInfo, $this->request->data);
            if ($this->ShopInfos->save($shopInfo)) {
                $this->Flash->success(__('The shop info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shop info could not be saved. Please, try again.'));
        }
        $shops = $this->ShopInfos->Shops->find('list', ['limit' => 200]);
        $this->set(compact('shopInfo', 'shops'));
        $this->set('_serialize', ['shopInfo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shop Info id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shopInfo = $this->ShopInfos->get($id);
        if ($this->ShopInfos->delete($shopInfo)) {
            $this->Flash->success(__('The shop info has been deleted.'));
        } else {
            $this->Flash->error(__('The shop info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
