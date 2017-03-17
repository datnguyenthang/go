<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Monies Controller
 *
 * @property \App\Model\Table\MoniesTable $Monies
 */
class MoniesController extends AppController
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
        $monies = $this->paginate($this->Monies);

        $this->set(compact('monies'));
        $this->set('_serialize', ['monies']);
    }

    /**
     * View method
     *
     * @param string|null $id Money id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $money = $this->Monies->get($id, [
            'contain' => ['Shops']
        ]);

        $this->set('money', $money);
        $this->set('_serialize', ['money']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $money = $this->Monies->newEntity();
        if ($this->request->is('post')) {
            $money = $this->Monies->patchEntity($money, $this->request->data);
            if ($this->Monies->save($money)) {
                $this->Flash->success(__('The money has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The money could not be saved. Please, try again.'));
        }
        $shops = $this->Monies->Shops->find('list', ['limit' => 200]);
        $this->set(compact('money', 'shops'));
        $this->set('_serialize', ['money']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Money id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $money = $this->Monies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $money = $this->Monies->patchEntity($money, $this->request->data);
            if ($this->Monies->save($money)) {
                $this->Flash->success(__('The money has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The money could not be saved. Please, try again.'));
        }
        $shops = $this->Monies->Shops->find('list', ['limit' => 200]);
        $this->set(compact('money', 'shops'));
        $this->set('_serialize', ['money']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Money id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $money = $this->Monies->get($id);
        if ($this->Monies->delete($money)) {
            $this->Flash->success(__('The money has been deleted.'));
        } else {
            $this->Flash->error(__('The money could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
