<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Atendimentos Controller
 *
 * @property \App\Model\Table\AtendimentosTable $Atendimentos
 */
class AtendimentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Atendimentos->find()
            ->contain(['Clientes', 'Funcionarios']);
        $atendimentos = $this->paginate($query);

        $this->set(compact('atendimentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Atendimento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atendimento = $this->Atendimentos->get($id, contain: ['Clientes', 'Funcionarios']);
        $this->set(compact('atendimento'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $atendimento = $this->Atendimentos->newEmptyEntity();
        if ($this->request->is('post')) {
            $atendimento = $this->Atendimentos->patchEntity($atendimento, $this->request->getData());
            if ($this->Atendimentos->save($atendimento)) {
                $this->Flash->success(__('The {0} has been saved.', 'Atendimento'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Atendimento'));
        }
        $clientes = $this->Atendimentos->Clientes->find('list', ['limit' => 200]);
        $funcionarios = $this->Atendimentos->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('atendimento', 'clientes', 'funcionarios'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Atendimento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atendimento = $this->Atendimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atendimento = $this->Atendimentos->patchEntity($atendimento, $this->request->getData());
            if ($this->Atendimentos->save($atendimento)) {
                $this->Flash->success(__('The {0} has been saved.', 'Atendimento'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Atendimento'));
        }
        $clientes = $this->Atendimentos->Clientes->find('list', ['limit' => 200]);
        $funcionarios = $this->Atendimentos->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('atendimento', 'clientes', 'funcionarios'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Atendimento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atendimento = $this->Atendimentos->get($id);
        if ($this->Atendimentos->delete($atendimento)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Atendimento'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Atendimento'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
