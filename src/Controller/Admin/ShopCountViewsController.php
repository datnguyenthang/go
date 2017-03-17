<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * ShopCountViews Controller
 *
 * @property \App\Model\Table\ShopCountViewsTable $ShopCountViews
 */
class ShopCountViewsController extends AppController
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
        $shopCountViews = $this->paginate($this->ShopCountViews);

        $this->set(compact('shopCountViews'));
        $this->set('_serialize', ['shopCountViews']);
    }

    /**
     * View method
     *
     * @param string|null $id Shop Count View id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shopCountView = $this->ShopCountViews->get($id, [
            'contain' => ['Shops']
        ]);

        $this->set('shopCountView', $shopCountView);
        $this->set('_serialize', ['shopCountView']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shopCountView = $this->ShopCountViews->newEntity();
        if ($this->request->is('post')) {
            $shopCountView = $this->ShopCountViews->patchEntity($shopCountView, $this->request->data);
            if ($this->ShopCountViews->save($shopCountView)) {
                $this->Flash->success(__('The shop count view has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shop count view could not be saved. Please, try again.'));
        }
        $shops = $this->ShopCountViews->Shops->find('list', ['limit' => 200]);
        $this->set(compact('shopCountView', 'shops'));
        $this->set('_serialize', ['shopCountView']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shop Count View id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shopCountView = $this->ShopCountViews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shopCountView = $this->ShopCountViews->patchEntity($shopCountView, $this->request->data);
            if ($this->ShopCountViews->save($shopCountView)) {
                $this->Flash->success(__('The shop count view has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shop count view could not be saved. Please, try again.'));
        }
        $shops = $this->ShopCountViews->Shops->find('list', ['limit' => 200]);
        $this->set(compact('shopCountView', 'shops'));
        $this->set('_serialize', ['shopCountView']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shop Count View id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shopCountView = $this->ShopCountViews->get($id);
        if ($this->ShopCountViews->delete($shopCountView)) {
            $this->Flash->success(__('The shop count view has been deleted.'));
        } else {
            $this->Flash->error(__('The shop count view could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
