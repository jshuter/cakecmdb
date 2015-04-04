<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Things Controller
 *
 * @property \App\Model\Table\ThingsTable $Things
 */
class ThingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Types', 'Versions', 'Systems']
        ];
        $this->set('things', $this->paginate($this->Things));
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
        $thing = $this->Things->get($id, [
            'contain' => ['Types', 'Versions', 'Systems', 'Attributes', 'ThingsAttributes']
        ]);
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
        $thing = $this->Things->newEntity();
        if ($this->request->is('post')) {
            $thing = $this->Things->patchEntity($thing, $this->request->data);
            if ($this->Things->save($thing)) {
                $this->Flash->success('The thing has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The thing could not be saved. Please, try again.');
            }
        }
        $types = $this->Things->Types->find('list', ['limit' => 200]);
        $versions = $this->Things->Versions->find('list', ['limit' => 200]);
        $systems = $this->Things->Systems->find('list', ['limit' => 200]);
        $attributes = $this->Things->Attributes->find('list', ['limit' => 200]);
        $this->set(compact('thing', 'types', 'versions', 'systems', 'attributes'));
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
        $thing = $this->Things->get($id, [
            'contain' => ['Attributes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $thing = $this->Things->patchEntity($thing, $this->request->data);
            if ($this->Things->save($thing)) {
                $this->Flash->success('The thing has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The thing could not be saved. Please, try again.');
            }
        }
        $types = $this->Things->Types->find('list', ['limit' => 200]);
        $versions = $this->Things->Versions->find('list', ['limit' => 200]);
        $systems = $this->Things->Systems->find('list', ['limit' => 200]);
        $attributes = $this->Things->Attributes->find('list', ['limit' => 200]);
        $this->set(compact('thing', 'types', 'versions', 'systems', 'attributes'));
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
        $thing = $this->Things->get($id);
        if ($this->Things->delete($thing)) {
            $this->Flash->success('The thing has been deleted.');
        } else {
            $this->Flash->error('The thing could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
