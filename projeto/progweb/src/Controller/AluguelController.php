<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aluguel Controller
 *
 * @property \App\Model\Table\AluguelTable $Aluguel
 */
class AluguelController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $aluguel = $this->paginate($this->Aluguel);

        $this->set(compact('aluguel'));
        $this->set('_serialize', ['aluguel']);
    }

    /**
     * View method
     *
     * @param string|null $id Aluguel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aluguel = $this->Aluguel->get($id, [
            'contain' => []
        ]);

        $this->set('aluguel', $aluguel);
        $this->set('_serialize', ['aluguel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aluguel = $this->Aluguel->newEntity();
        if ($this->request->is('post')) {
            $aluguel = $this->Aluguel->patchEntity($aluguel, $this->request->data);
            if ($this->Aluguel->save($aluguel)) {
                $this->Flash->success(__('The aluguel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aluguel could not be saved. Please, try again.'));
        }
        $this->set(compact('aluguel'));
        $this->set('_serialize', ['aluguel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aluguel id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aluguel = $this->Aluguel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aluguel = $this->Aluguel->patchEntity($aluguel, $this->request->data);
            if ($this->Aluguel->save($aluguel)) {
                $this->Flash->success(__('The aluguel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aluguel could not be saved. Please, try again.'));
        }
        $this->set(compact('aluguel'));
        $this->set('_serialize', ['aluguel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aluguel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aluguel = $this->Aluguel->get($id);
        if ($this->Aluguel->delete($aluguel)) {
            $this->Flash->success(__('The aluguel has been deleted.'));
        } else {
            $this->Flash->error(__('The aluguel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}