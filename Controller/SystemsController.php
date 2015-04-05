<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Systems Controller
 *
 * @property \App\Model\Table\SystemsTable $Systems
 */
class SystemsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('systems', $this->paginate($this->Systems));
        $this->set('_serialize', ['systems']);
    }

    /**
     * View method
     *
     * @param string|null $id System id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $system = $this->Systems->get($id, [
            'contain' => ['Things', 'SystemsThings']
        ]);
        $this->set('system', $system);
        $this->set('_serialize', ['system']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $system = $this->Systems->newEntity();
        if ($this->request->is('post')) {
            $system = $this->Systems->patchEntity($system, $this->request->data);
            if ($this->Systems->save($system)) {
                $this->Flash->success('The system has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The system could not be saved. Please, try again.');
            }
        }
        $things = $this->Systems->Things->find('list', ['limit' => 200]);
        $this->set(compact('system', 'things'));
        $this->set('_serialize', ['system']);
    }

    /**
     * Edit method
     *
     * @param string|null $id System id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $system = $this->Systems->get($id, [
            'contain' => ['Things']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $system = $this->Systems->patchEntity($system, $this->request->data);
            if ($this->Systems->save($system)) {
                $this->Flash->success('The system has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The system could not be saved. Please, try again.');
            }
        }
        $things = $this->Systems->Things->find('list', ['limit' => 200]);
        $this->set(compact('system', 'things'));
        $this->set('_serialize', ['system']);
    }

    /**
     * Delete method
     *
     * @param string|null $id System id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $system = $this->Systems->get($id);
        if ($this->Systems->delete($system)) {
            $this->Flash->success('The system has been deleted.');
        } else {
            $this->Flash->error('The system could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
