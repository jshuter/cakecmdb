<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SystemsThings Controller
 *
 * @property \App\Model\Table\SystemsThingsTable $SystemsThings
 */
class SystemsThingsController extends AppController
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
        $this->set('systemsThings', $this->paginate($this->SystemsThings));
        $this->set('_serialize', ['systemsThings']);
    }

    /**
     * View method
     *
     * @param string|null $id Systems Thing id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $systemsThing = $this->SystemsThings->get($id, [
            'contain' => ['Things', 'Systems']
        ]);
        $this->set('systemsThing', $systemsThing);
        $this->set('_serialize', ['systemsThing']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $systemsThing = $this->SystemsThings->newEntity();
        if ($this->request->is('post')) {
            $systemsThing = $this->SystemsThings->patchEntity($systemsThing, $this->request->data);
            if ($this->SystemsThings->save($systemsThing)) {
                $this->Flash->success('The systems thing has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The systems thing could not be saved. Please, try again.');
            }
        }
        $things = $this->SystemsThings->Things->find('list', ['limit' => 200]);
        $systems = $this->SystemsThings->Systems->find('list', ['limit' => 200]);
        $this->set(compact('systemsThing', 'things', 'systems'));
        $this->set('_serialize', ['systemsThing']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Systems Thing id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $systemsThing = $this->SystemsThings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $systemsThing = $this->SystemsThings->patchEntity($systemsThing, $this->request->data);
            if ($this->SystemsThings->save($systemsThing)) {
                $this->Flash->success('The systems thing has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The systems thing could not be saved. Please, try again.');
            }
        }
        $things = $this->SystemsThings->Things->find('list', ['limit' => 200]);
        $systems = $this->SystemsThings->Systems->find('list', ['limit' => 200]);
        $this->set(compact('systemsThing', 'things', 'systems'));
        $this->set('_serialize', ['systemsThing']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Systems Thing id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $systemsThing = $this->SystemsThings->get($id);
        if ($this->SystemsThings->delete($systemsThing)) {
            $this->Flash->success('The systems thing has been deleted.');
        } else {
            $this->Flash->error('The systems thing could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
