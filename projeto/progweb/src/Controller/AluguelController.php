<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

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
        $aluguel = $this->paginate(
            $this
                ->Aluguel
                ->find('alugueisAtivosPorClienteId', ['id_cliente' => $this->Auth->user()['id']])
        );

        $this->set(compact('aluguel'));
        $this->set('_serialize', ['aluguel']);

        $this->set('titulo', 'Aluguéis Ativos');
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

        $this->set('titulo', '');
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        if($id == null)
        {
            $this->Flash->error(__('Produto com id nulo não pode ser alugado.'));
        }

        $produto = TableRegistry::get('Produto')->get($id);

        $aluguel = $this->Aluguel->newEntity();
        if ($this->request->is('post')) {
            $aluguel = $this->Aluguel->patchEntity($aluguel, $this->request->data);
            if ($this->Aluguel->save($aluguel)) {

                TableRegistry::get('Produto')->alugado($id);

                $this->Flash->success(__('The aluguel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aluguel could not be saved. Please, try again.'));
        }

        $this->set(compact('aluguel', 'produto'));
        $this->set('_serialize', ['aluguel']);

        $this->set('titulo', 'Realizar Locação');
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
