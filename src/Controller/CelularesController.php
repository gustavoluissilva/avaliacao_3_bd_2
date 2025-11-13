<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Celulares Controller
 *
 * @property \App\Model\Table\CelularesTable $Celulares
 */
class CelularesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Celulares->find()
            ->contain(['Clientes']);
        $celulares = $this->paginate($query);

        $this->set(compact('celulares'));
    }

    /**
     * View method
     *
     * @param string|null $id Celulare id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $celulare = $this->Celulares->get($id, contain: ['Clientes']);
        $this->set(compact('celulare'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $celulare = $this->Celulares->newEmptyEntity();
        if ($this->request->is('post')) {
            $celulare = $this->Celulares->patchEntity($celulare, $this->request->getData());
            if ($this->Celulares->save($celulare)) {
                $this->Flash->success(__('The {0} has been saved.', 'Celulare'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Celulare'));
        }
        $clientes = $this->Celulares->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('celulare', 'clientes'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Celulare id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $celulare = $this->Celulares->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $celulare = $this->Celulares->patchEntity($celulare, $this->request->getData());
            if ($this->Celulares->save($celulare)) {
                $this->Flash->success(__('The {0} has been saved.', 'Celulare'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Celulare'));
        }
        $clientes = $this->Celulares->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('celulare', 'clientes'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Celulare id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $celulare = $this->Celulares->get($id);
        if ($this->Celulares->delete($celulare)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Celulare'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Celulare'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
