<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * ProductTypeQuantity Controller
 *
 * @property \App\Model\Table\ProductTypeQuantityTable $ProductTypeQuantity
 */
class ProductTypeQuantityController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $productTypeQuantity = $this->paginate($this->ProductTypeQuantity);

        $this->set(compact('productTypeQuantity'));
        $this->set('_serialize', ['productTypeQuantity']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Type Quantity id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productTypeQuantity = $this->ProductTypeQuantity->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('productTypeQuantity', $productTypeQuantity);
        $this->set('_serialize', ['productTypeQuantity']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productTypeQuantity = $this->ProductTypeQuantity->newEntity();
        if ($this->request->is('post')) {
            $productTypeQuantity = $this->ProductTypeQuantity->patchEntity($productTypeQuantity, $this->request->data);
            if ($this->ProductTypeQuantity->save($productTypeQuantity)) {
                $this->Flash->success(__('The product type quantity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product type quantity could not be saved. Please, try again.'));
        }
        $products = $this->ProductTypeQuantity->Products->find('list', ['limit' => 200]);
        $this->set(compact('productTypeQuantity', 'products'));
        $this->set('_serialize', ['productTypeQuantity']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Type Quantity id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productTypeQuantity = $this->ProductTypeQuantity->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productTypeQuantity = $this->ProductTypeQuantity->patchEntity($productTypeQuantity, $this->request->data);
            if ($this->ProductTypeQuantity->save($productTypeQuantity)) {
                $this->Flash->success(__('The product type quantity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product type quantity could not be saved. Please, try again.'));
        }
        $products = $this->ProductTypeQuantity->Products->find('list', ['limit' => 200]);
        $this->set(compact('productTypeQuantity', 'products'));
        $this->set('_serialize', ['productTypeQuantity']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Type Quantity id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productTypeQuantity = $this->ProductTypeQuantity->get($id);
        if ($this->ProductTypeQuantity->delete($productTypeQuantity)) {
            $this->Flash->success(__('The product type quantity has been deleted.'));
        } else {
            $this->Flash->error(__('The product type quantity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
