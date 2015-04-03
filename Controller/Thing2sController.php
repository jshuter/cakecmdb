<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Things Controller
 *
 * @property \App\Model\Table\ThingsTable $Things
 */
class Thing2sController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Types']
        ];
        $this->set('thing2s', $this->paginate($this->Thing2s));
        $this->set('_serialize', ['things']);
    }

    /**
     * View method
     *
     * @param string|null $id Thing id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $thing = $this->Thing2s->get($id, [ 'contain' => ['Types', 'Things'] ]);
        $this->set('thing', $thing);
        $this->set('_serialize', ['thing']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $thing = $this->Thing2s->newEntity();
        if ($this->request->is('post')) {
            $thing = $this->Thing2s->patchEntity($thing, $this->request->data);
            if ($this->Thing2s->save($thing)) {
                $this->Flash->success('The thing has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The thing could not be saved. Please, try again.');
            }
        }
        $types = $this->Thing2s->Types->find('list', ['limit' => 200]);
        $things = $this->Thing2s->Things->find('list', ['limit' => 200]);
        $this->set(compact('thing', 'types', 'things'));
        $this->set('_serialize', ['thing']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Thing id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $thing = $this->Thing2s->get($id, [
            'contain' => ['Things']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $thing = $this->Thing2s->patchEntity($thing, $this->request->data);
            if ($this->Thing2s->save($thing)) {
                $this->Flash->success('The thing has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The thing could not be saved. Please, try again.');
            }
        }
        $types = $this->Thing2s->Types->find('list', ['limit' => 200]);
        $things = $this->Thing2s->Things->find('list', ['limit' => 200]);
        $this->set(compact('thing', 'types', 'things'));
        $this->set('_serialize', ['thing']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Thing id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $thing = $this->Thing2s->get($id);
        if ($this->Thing2s->delete($thing)) {
            $this->Flash->success('The thing has been deleted.');
        } else {
            $this->Flash->error('The thing could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
