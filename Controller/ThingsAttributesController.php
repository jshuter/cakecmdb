<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ThingsAttributes Controller
 *
 * @property \App\Model\Table\ThingsAttributesTable $ThingsAttributes
 */
class ThingsAttributesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Things', 'Attributes']
        ];
        $this->set('thingsAttributes', $this->paginate($this->ThingsAttributes));
        $this->set('_serialize', ['thingsAttributes']);
    }

    /**
     * View method
     *
     * @param string|null $id Things Attribute id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $thingsAttribute = $this->ThingsAttributes->get($id, [
            'contain' => ['Things', 'Attributes']
        ]);
        $this->set('thingsAttribute', $thingsAttribute);
        $this->set('_serialize', ['thingsAttribute']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $thingsAttribute = $this->ThingsAttributes->newEntity();
        if ($this->request->is('post')) {
            $thingsAttribute = $this->ThingsAttributes->patchEntity($thingsAttribute, $this->request->data);
            if ($this->ThingsAttributes->save($thingsAttribute)) {
                $this->Flash->success('The things attribute has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The things attribute could not be saved. Please, try again.');
            }
        }
        $things = $this->ThingsAttributes->Things->find('list', ['limit' => 200]);
        $attributes = $this->ThingsAttributes->Attributes->find('list', ['limit' => 200]);
        $this->set(compact('thingsAttribute', 'things', 'attributes'));
        $this->set('_serialize', ['thingsAttribute']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Things Attribute id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $thingsAttribute = $this->ThingsAttributes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $thingsAttribute = $this->ThingsAttributes->patchEntity($thingsAttribute, $this->request->data);
            if ($this->ThingsAttributes->save($thingsAttribute)) {
                $this->Flash->success('The things attribute has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The things attribute could not be saved. Please, try again.');
            }
        }
        $things = $this->ThingsAttributes->Things->find('list', ['limit' => 200]);
        $attributes = $this->ThingsAttributes->Attributes->find('list', ['limit' => 200]);
        $this->set(compact('thingsAttribute', 'things', 'attributes'));
        $this->set('_serialize', ['thingsAttribute']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Things Attribute id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $thingsAttribute = $this->ThingsAttributes->get($id);
        if ($this->ThingsAttributes->delete($thingsAttribute)) {
            $this->Flash->success('The things attribute has been deleted.');
        } else {
            $this->Flash->error('The things attribute could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
