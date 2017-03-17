<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * OrderDetails Controller
 *
 * @property \App\Model\Table\OrderDetailsTable $OrderDetails
 */
class OrderDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders', 'Shops', 'Products', 'Types']
        ];
        $orderDetails = $this->paginate($this->OrderDetails);

        $this->set(compact('orderDetails'));
        $this->set('_serialize', ['orderDetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Order Detail id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderDetail = $this->OrderDetails->get($id, [
            'contain' => ['Orders', 'Shops', 'Products', 'Types']
        ]);

        $this->set('orderDetail', $orderDetail);
        $this->set('_serialize', ['orderDetail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderDetail = $this->OrderDetails->newEntity();
        if ($this->request->is('post')) {
            $orderDetail = $this->OrderDetails->patchEntity($orderDetail, $this->request->data);
            if ($this->OrderDetails->save($orderDetail)) {
                $this->Flash->success(__('The order detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order detail could not be saved. Please, try again.'));
        }
        $orders = $this->OrderDetails->Orders->find('list', ['limit' => 200]);
        $shops = $this->OrderDetails->Shops->find('list', ['limit' => 200]);
        $products = $this->OrderDetails->Products->find('list', ['limit' => 200]);
        $types = $this->OrderDetails->Types->find('list', ['limit' => 200]);
        $this->set(compact('orderDetail', 'orders', 'shops', 'products', 'types'));
        $this->set('_serialize', ['orderDetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Detail id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderDetail = $this->OrderDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderDetail = $this->OrderDetails->patchEntity($orderDetail, $this->request->data);
            if ($this->OrderDetails->save($orderDetail)) {
                $this->Flash->success(__('The order detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order detail could not be saved. Please, try again.'));
        }
        $orders = $this->OrderDetails->Orders->find('list', ['limit' => 200]);
        $shops = $this->OrderDetails->Shops->find('list', ['limit' => 200]);
        $products = $this->OrderDetails->Products->find('list', ['limit' => 200]);
        $types = $this->OrderDetails->Types->find('list', ['limit' => 200]);
        $this->set(compact('orderDetail', 'orders', 'shops', 'products', 'types'));
        $this->set('_serialize', ['orderDetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Detail id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderDetail = $this->OrderDetails->get($id);
        if ($this->OrderDetails->delete($orderDetail)) {
            $this->Flash->success(__('The order detail has been deleted.'));
        } else {
            $this->Flash->error(__('The order detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
