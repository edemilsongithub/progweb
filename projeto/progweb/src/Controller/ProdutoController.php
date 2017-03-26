<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Produto Controller
 *
 * @property \App\Model\Table\ProdutoTable $Produto
 */
class ProdutoController extends AppController
{
    /**
     *  Middleware de ação antes da execução dos métodos
     */ 
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view']);

        $this->set('titulo', 'Produtos');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $produto = $this->paginate(
                $this->Produto
                    ->find()
                    ->order(['qnt' => 'DESC'])
                    ->where(['qnt >' => 0])
            );

        $this->set(compact('produto'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * View method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produto = $this->Produto->get($id, [
            'contain' => []
        ]);

        $this->set('produto', $produto);
        $this->set('_serialize', ['produto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produto = $this->Produto->newEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produto->patchEntity($produto, $this->request->data);
            if ($this->Produto->save($produto)) {
                $this->Flash->success(__('Produto salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O produto não foi adicionado.'));
        }
        $this->set(compact('produto'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produto = $this->Produto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produto = $this->Produto->patchEntity($produto, $this->request->data);
            if ($this->Produto->save($produto)) {
                $this->Flash->success(__('Produto editado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O produto não foi salvo.'));
        }
        $this->set(compact('produto'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produto = $this->Produto->get($id);
        if ($this->Produto->delete($produto)) {
            $this->Flash->success(__('Produto removido.'));
        } else {
            $this->Flash->error(__('O Produto não foi removido.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {
        return true;
    }
}
