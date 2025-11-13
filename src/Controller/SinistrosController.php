<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sinistros Controller
 *
 * @property \App\Model\Table\SinistrosTable $Sinistros
 */
class SinistrosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Sinistros->find()
            ->contain(['Seguros']);
        $sinistros = $this->paginate($query);

        $this->set(compact('sinistros'));
    }

    /**
     * View method
     *
     * @param string|null $id Sinistro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sinistro = $this->Sinistros->get($id, contain: ['Seguros']);
        $this->set(compact('sinistro'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sinistro = $this->Sinistros->newEmptyEntity();
        if ($this->request->is('post')) {
            $sinistro = $this->Sinistros->patchEntity($sinistro, $this->request->getData());
            if ($this->Sinistros->save($sinistro)) {
                $this->Flash->success(__('The sinistro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sinistro could not be saved. Please, try again.'));
        }
        $seguros = $this->Sinistros->Seguros->find('list', limit: 200)->all();
        $this->set(compact('sinistro', 'seguros'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sinistro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sinistro = $this->Sinistros->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sinistro = $this->Sinistros->patchEntity($sinistro, $this->request->getData());
            if ($this->Sinistros->save($sinistro)) {
                $this->Flash->success(__('The sinistro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sinistro could not be saved. Please, try again.'));
        }
        $seguros = $this->Sinistros->Seguros->find('list', limit: 200)->all();
        $this->set(compact('sinistro', 'seguros'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sinistro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sinistro = $this->Sinistros->get($id);
        if ($this->Sinistros->delete($sinistro)) {
            $this->Flash->success(__('The sinistro has been deleted.'));
        } else {
            $this->Flash->error(__('The sinistro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
