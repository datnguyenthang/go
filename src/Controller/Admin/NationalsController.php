<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Nationals Controller
 *
 * @property \App\Model\Table\NationalsTable $Nationals
 */
class NationalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $nationals = $this->paginate($this->Nationals);

        $this->set(compact('nationals'));
        $this->set('_serialize', ['nationals']);
    }

    /**
     * View method
     *
     * @param string|null $id National id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $national = $this->Nationals->get($id, [
            'contain' => ['Shops', 'States']
        ]);

        $this->set('national', $national);
        $this->set('_serialize', ['national']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $national = $this->Nationals->newEntity();
        if ($this->request->is('post')) {
            $national = $this->Nationals->patchEntity($national, $this->request->data);
            if ($this->Nationals->save($national)) {
                $this->Flash->success(__('The national has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The national could not be saved. Please, try again.'));
        }
        $this->set(compact('national'));
        $this->set('_serialize', ['national']);
    }

    /**
     * Edit method
     *
     * @param string|null $id National id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $national = $this->Nationals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $national = $this->Nationals->patchEntity($national, $this->request->data);
            if ($this->Nationals->save($national)) {
                $this->Flash->success(__('The national has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The national could not be saved. Please, try again.'));
        }
        $this->set(compact('national'));
        $this->set('_serialize', ['national']);
    }

    /**
     * Delete method
     *
     * @param string|null $id National id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $national = $this->Nationals->get($id);
        if ($this->Nationals->delete($national)) {
            $this->Flash->success(__('The national has been deleted.'));
        } else {
            $this->Flash->error(__('The national could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
