<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ThingsSystems Controller
 *
 * @property \App\Model\Table\ThingsSystemsTable $ThingsSystems
 */
class ThingsSystemsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Things', 'Systems']
        ];
        $this->set('thingsSystems', $this->paginate($this->ThingsSystems));
        $this->set('_serialize', ['thingsSystems']);
    }

    /**
     * View method
     *
     * @param string|null $id Things System id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $thingsSystem = $this->ThingsSystems->get($id, [
            'contain' => ['Things', 'Systems']
        ]);
        $this->set('thingsSystem', $thingsSystem);
        $this->set('_serialize', ['thingsSystem']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $thingsSystem = $this->ThingsSystems->newEntity();
        if ($this->request->is('post')) {
            $thingsSystem = $this->ThingsSystems->patchEntity($thingsSystem, $this->request->data);
            if ($this->ThingsSystems->save($thingsSystem)) {
                $this->Flash->success('The things system has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The things system could not be saved. Please, try again.');
            }
        }
        $things = $this->ThingsSystems->Things->find('list', ['limit' => 200]);
        $systems = $this->ThingsSystems->Systems->find('list', ['limit' => 200]);
        $this->set(compact('thingsSystem', 'things', 'systems'));
        $this->set('_serialize', ['thingsSystem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Things System id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $thingsSystem = $this->ThingsSystems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $thingsSystem = $this->ThingsSystems->patchEntity($thingsSystem, $this->request->data);
            if ($this->ThingsSystems->save($thingsSystem)) {
                $this->Flash->success('The things system has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The things system could not be saved. Please, try again.');
            }
        }
        $things = $this->ThingsSystems->Things->find('list', ['limit' => 200]);
        $systems = $this->ThingsSystems->Systems->find('list', ['limit' => 200]);
        $this->set(compact('thingsSystem', 'things', 'systems'));
        $this->set('_serialize', ['thingsSystem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Things System id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $thingsSystem = $this->ThingsSystems->get($id);
        if ($this->ThingsSystems->delete($thingsSystem)) {
            $this->Flash->success('The things system has been deleted.');
        } else {
            $this->Flash->error('The things system could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
