<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Versions Controller
 *
 * @property \App\Model\Table\VersionsTable $Versions
 */
class VersionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('versions', $this->paginate($this->Versions));
        $this->set('_serialize', ['versions']);
    }

    /**
     * View method
     *
     * @param string|null $id Version id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $version = $this->Versions->get($id, [
            'contain' => ['Things']
        ]);
        $this->set('version', $version);
        $this->set('_serialize', ['version']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $version = $this->Versions->newEntity();
        if ($this->request->is('post')) {
            $version = $this->Versions->patchEntity($version, $this->request->data);
            if ($this->Versions->save($version)) {
                $this->Flash->success('The version has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The version could not be saved. Please, try again.');
            }
        }
        $this->set(compact('version'));
        $this->set('_serialize', ['version']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Version id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $version = $this->Versions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $version = $this->Versions->patchEntity($version, $this->request->data);
            if ($this->Versions->save($version)) {
                $this->Flash->success('The version has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The version could not be saved. Please, try again.');
            }
        }
        $this->set(compact('version'));
        $this->set('_serialize', ['version']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Version id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $version = $this->Versions->get($id);
        if ($this->Versions->delete($version)) {
            $this->Flash->success('The version has been deleted.');
        } else {
            $this->Flash->error('The version could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
