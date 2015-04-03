<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Relations Controller
 *
 * @property \App\Model\Table\RelationsTable $Relations
 */
class RelationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Things', 'Thing2s', 'Reltypes']
        ];
        $this->set('relations', $this->paginate($this->Relations));
        $this->set('_serialize', ['relations']);
    }

    /**
     * View method
     *
     * @param string|null $id Relation id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $relation = $this->Relations->get($id, [
            'contain' => ['Things', 'Thing2s', 'Reltypes']
        ]);
        $this->set('relation', $relation);
        $this->set('_serialize', ['relation']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $relation = $this->Relations->newEntity();
        if ($this->request->is('post')) {
            $relation = $this->Relations->patchEntity($relation, $this->request->data);
            if ($this->Relations->save($relation)) {
                $this->Flash->success('The relation has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The relation could not be saved. Please, try again.');
            }
        }
        $things = $this->Relations->Things->find('list', ['limit' => 200]);
        $thing2s = $this->Relations->Thing2s->find('list', ['limit' => 200]);
        $reltypes = $this->Relations->Reltypes->find('list', ['limit' => 200]);
        $this->set(compact('relation', 'things', 'thing2s', 'reltypes'));
        $this->set('_serialize', ['relation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Relation id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $relation = $this->Relations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $relation = $this->Relations->patchEntity($relation, $this->request->data);
            if ($this->Relations->save($relation)) {
                $this->Flash->success('The relation has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The relation could not be saved. Please, try again.');
            }
        }
        $things = $this->Relations->Things->find('list', ['limit' => 200]);
        $thing2s = $this->Relations->Thing2s->find('list', ['limit' => 200]);
        $reltypes = $this->Relations->Reltypes->find('list', ['limit' => 200]);
        $this->set(compact('relation', 'things', 'thing2s', 'reltypes'));
        $this->set('_serialize', ['relation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Relation id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $relation = $this->Relations->get($id);
        if ($this->Relations->delete($relation)) {
            $this->Flash->success('The relation has been deleted.');
        } else {
            $this->Flash->error('The relation could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
