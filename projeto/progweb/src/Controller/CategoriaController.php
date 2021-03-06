<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

/**
 * Categoria Controller
 *
 * @property \App\Model\Table\CategoriaTable $Categoria
 */
class CategoriaController extends AppController
{
    /**
     *  Middleware de ação antes da execução dos métodos
     */ 
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $categoria = $this->paginate($this->Categoria);

        $this->set(compact('categoria'));
        $this->set('_serialize', ['categoria']);
    }

    /**
     * View method
     *
     * @param string|null $id Categorium id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categorium = $this->Categoria->get($id, [
            'contain' => []
        ]);

        $produtos = TableRegistry::get('Produto');
        $produtos = $produtos->find('byCategoriaId', ['categoria_id' => $id]);

        $this->set('categorium', $categorium);
        $this->set('produtos', $produtos);
        $this->set('_serialize', ['categorium']);

        $this->set('titulo', $categorium->nome);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categorium = $this->Categoria->newEntity();
        if ($this->request->is('post')) {
            $categorium = $this->Categoria->patchEntity($categorium, $this->request->data);
            if ($this->Categoria->save($categorium)) {
                $this->Flash->success(__('The categorium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorium could not be saved. Please, try again.'));
        }
        $this->set(compact('categorium'));
        $this->set('_serialize', ['categorium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorium id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categorium = $this->Categoria->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categorium = $this->Categoria->patchEntity($categorium, $this->request->data);
            if ($this->Categoria->save($categorium)) {
                $this->Flash->success(__('The categorium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorium could not be saved. Please, try again.'));
        }
        $this->set(compact('categorium'));
        $this->set('_serialize', ['categorium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorium id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categorium = $this->Categoria->get($id);
        if ($this->Categoria->delete($categorium)) {
            $this->Flash->success(__('The categorium has been deleted.'));
        } else {
            $this->Flash->error(__('The categorium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
