<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ThingsThing2s Controller
 *
 * @property \App\Model\Table\ThingsThing2sTable $ThingsThing2s
 */
class ThingsThing2sController extends AppController
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
        $this->set('thingsThing2s', $this->paginate($this->ThingsThing2s));
        $this->set('_serialize', ['thingsThing2s']);
    }

    public function tree()
    {
		$results = array(); 
		$results[] = $this->ThingsThing2s->get(1,['contain'=> ['Things','Thing2s']]);
		$results[] = $this->ThingsThing2s->get(2,['contain'=> ['Things','Thing2s']]);
		$results[] = $this->ThingsThing2s->get(3,['contain'=> ['Things','Thing2s']]);
		$results[] = $this->ThingsThing2s->get(4,['contain'=> ['Things','Thing2s']]);

        $this->set('thingsThing2s', $results);
        $this->set('_serialize', ['thingsThing2s']);
	}
    /**
     * View method
     *
     * @param string|null $id Things Thing2 id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $thingsThing2 = $this->ThingsThing2s->get($id, [
            'contain' => ['Things', 'Thing2s', 'Reltypes']
        ]);
        $this->set('thingsThing2', $thingsThing2);
        $this->set('_serialize', ['thingsThing2']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $thingsThing2 = $this->ThingsThing2s->newEntity();
        if ($this->request->is('post')) {
            $thingsThing2 = $this->ThingsThing2s->patchEntity($thingsThing2, $this->request->data);
            if ($this->ThingsThing2s->save($thingsThing2)) {
                $this->Flash->success('The things thing2 has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The things thing2 could not be saved. Please, try again.');
            }
        }
        $things = $this->ThingsThing2s->Things->find('list', ['limit' => 200]);
        $thing2s = $this->ThingsThing2s->Thing2s->find('list', ['limit' => 200]);
        $reltypes = $this->ThingsThing2s->Reltypes->find('list', ['limit' => 200]);
        $this->set(compact('thingsThing2', 'things', 'thing2s', 'reltypes'));
        $this->set('_serialize', ['thingsThing2']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Things Thing2 id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $thingsThing2 = $this->ThingsThing2s->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $thingsThing2 = $this->ThingsThing2s->patchEntity($thingsThing2, $this->request->data);
            if ($this->ThingsThing2s->save($thingsThing2)) {
                $this->Flash->success('The things thing2 has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The things thing2 could not be saved. Please, try again.');
            }
        }
        $things = $this->ThingsThing2s->Things->find('list', ['limit' => 200]);
        $thing2s = $this->ThingsThing2s->Thing2s->find('list', ['limit' => 200]);
        $reltypes = $this->ThingsThing2s->Reltypes->find('list', ['limit' => 200]);
        $this->set(compact('thingsThing2', 'things', 'thing2s', 'reltypes'));
        $this->set('_serialize', ['thingsThing2']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Things Thing2 id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $thingsThing2 = $this->ThingsThing2s->get($id);
        if ($this->ThingsThing2s->delete($thingsThing2)) {
            $this->Flash->success('The things thing2 has been deleted.');
        } else {
            $this->Flash->error('The things thing2 could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
