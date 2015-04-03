<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reltypes Controller
 *
 * @property \App\Model\Table\ReltypesTable $Reltypes
 */
class ReltypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('reltypes', $this->paginate($this->Reltypes));
        $this->set('_serialize', ['reltypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Reltype id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reltype = $this->Reltypes->get($id, [
            'contain' => ['ThingsThing2s']
        ]);
        $this->set('reltype', $reltype);
        $this->set('_serialize', ['reltype']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reltype = $this->Reltypes->newEntity();
        if ($this->request->is('post')) {
            $reltype = $this->Reltypes->patchEntity($reltype, $this->request->data);
            if ($this->Reltypes->save($reltype)) {
                $this->Flash->success('The reltype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The reltype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('reltype'));
        $this->set('_serialize', ['reltype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Reltype id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reltype = $this->Reltypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reltype = $this->Reltypes->patchEntity($reltype, $this->request->data);
            if ($this->Reltypes->save($reltype)) {
                $this->Flash->success('The reltype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The reltype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('reltype'));
        $this->set('_serialize', ['reltype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Reltype id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reltype = $this->Reltypes->get($id);
        if ($this->Reltypes->delete($reltype)) {
            $this->Flash->success('The reltype has been deleted.');
        } else {
            $this->Flash->error('The reltype could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
