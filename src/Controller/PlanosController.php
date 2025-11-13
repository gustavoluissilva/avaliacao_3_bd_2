<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Planos Controller
 *
 * @property \App\Model\Table\PlanosTable $Planos
 */
class PlanosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Planos->find();
        $planos = $this->paginate($query);

        $this->set(compact('planos'));
    }

    /**
     * View method
     *
     * @param string|null $id Plano id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $plano = $this->Planos->get($id, contain: ['Seguros']);
        $this->set(compact('plano'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $plano = $this->Planos->newEmptyEntity();
        if ($this->request->is('post')) {
            $plano = $this->Planos->patchEntity($plano, $this->request->getData());
            if ($this->Planos->save($plano)) {
                $this->Flash->success(__('The {0} has been saved.', 'Plano'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Plano'));
        }
        $this->set(compact('plano'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Plano id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $plano = $this->Planos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $plano = $this->Planos->patchEntity($plano, $this->request->getData());
            if ($this->Planos->save($plano)) {
                $this->Flash->success(__('The {0} has been saved.', 'Plano'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Plano'));
        }
        $this->set(compact('plano'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Plano id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $plano = $this->Planos->get($id);
        if ($this->Planos->delete($plano)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Plano'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Plano'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
