<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Seguros Controller
 *
 * @property \App\Model\Table\SegurosTable $Seguros
 */
class SegurosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Seguros->find()
            ->contain(['Celulars', 'Planos', 'Funcionarios']);
        $seguros = $this->paginate($query);

        $this->set(compact('seguros'));
    }

    /**
     * View method
     *
     * @param string|null $id Seguro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seguro = $this->Seguros->get($id, contain: ['Celulars', 'Planos', 'Funcionarios', 'Pagamentos', 'Sinistros']);
        $this->set(compact('seguro'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seguro = $this->Seguros->newEmptyEntity();
        if ($this->request->is('post')) {
            $seguro = $this->Seguros->patchEntity($seguro, $this->request->getData());
            if ($this->Seguros->save($seguro)) {
                $this->Flash->success(__('The seguro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seguro could not be saved. Please, try again.'));
        }
        $celulars = $this->Seguros->Celulars->find('list', limit: 200)->all();
        $planos = $this->Seguros->Planos->find('list', limit: 200)->all();
        $funcionarios = $this->Seguros->Funcionarios->find('list', limit: 200)->all();
        $this->set(compact('seguro', 'celulars', 'planos', 'funcionarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Seguro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seguro = $this->Seguros->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seguro = $this->Seguros->patchEntity($seguro, $this->request->getData());
            if ($this->Seguros->save($seguro)) {
                $this->Flash->success(__('The seguro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seguro could not be saved. Please, try again.'));
        }
        $celulars = $this->Seguros->Celulars->find('list', limit: 200)->all();
        $planos = $this->Seguros->Planos->find('list', limit: 200)->all();
        $funcionarios = $this->Seguros->Funcionarios->find('list', limit: 200)->all();
        $this->set(compact('seguro', 'celulars', 'planos', 'funcionarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Seguro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seguro = $this->Seguros->get($id);
        if ($this->Seguros->delete($seguro)) {
            $this->Flash->success(__('The seguro has been deleted.'));
        } else {
            $this->Flash->error(__('The seguro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
