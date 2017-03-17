<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * TypeShops Controller
 *
 * @property \App\Model\Table\TypeShopsTable $TypeShops
 */
class TypeShopsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $typeShops = $this->paginate($this->TypeShops);

        $this->set(compact('typeShops'));
        $this->set('_serialize', ['typeShops']);
    }

    /**
     * View method
     *
     * @param string|null $id Type Shop id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeShop = $this->TypeShops->get($id, [
            'contain' => ['Shops']
        ]);

        $this->set('typeShop', $typeShop);
        $this->set('_serialize', ['typeShop']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeShop = $this->TypeShops->newEntity();
        if ($this->request->is('post')) {
            $typeShop = $this->TypeShops->patchEntity($typeShop, $this->request->data);
            if ($this->TypeShops->save($typeShop)) {
                $this->Flash->success(__('The type shop has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type shop could not be saved. Please, try again.'));
        }
        $this->set(compact('typeShop'));
        $this->set('_serialize', ['typeShop']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Type Shop id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeShop = $this->TypeShops->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeShop = $this->TypeShops->patchEntity($typeShop, $this->request->data);
            if ($this->TypeShops->save($typeShop)) {
                $this->Flash->success(__('The type shop has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type shop could not be saved. Please, try again.'));
        }
        $this->set(compact('typeShop'));
        $this->set('_serialize', ['typeShop']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Type Shop id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeShop = $this->TypeShops->get($id);
        if ($this->TypeShops->delete($typeShop)) {
            $this->Flash->success(__('The type shop has been deleted.'));
        } else {
            $this->Flash->error(__('The type shop could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
