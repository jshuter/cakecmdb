<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aaas Controller
 *
 * @property \App\Model\Table\AaasTable $Aaas
 */
class AaasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('aaas', $this->paginate($this->Aaas));
        $this->set('_serialize', ['aaas']);
    }

    /**
     * View method
     *
     * @param string|null $id Aaa id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aaa = $this->Aaas->get($id, [
            'contain' => ['Bbbs', 'AaasBbbs' ]
        ]);
        $this->set('aaa', $aaa);
        $this->set('_serialize', ['aaa']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aaa = $this->Aaas->newEntity();
        if ($this->request->is('post')) {
            $aaa = $this->Aaas->patchEntity($aaa, $this->request->data);
            if ($this->Aaas->save($aaa)) {
                $this->Flash->success('The aaa has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The aaa could not be saved. Please, try again.');
            }
        }
        $bbbs = $this->Aaas->Bbbs->find('list', ['limit' => 200]);
        $this->set(compact('aaa', 'bbbs'));
        $this->set('_serialize', ['aaa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aaa id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aaa = $this->Aaas->get($id, [
            'contain' => ['Bbbs']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aaa = $this->Aaas->patchEntity($aaa, $this->request->data);
            if ($this->Aaas->save($aaa)) {
                $this->Flash->success('The aaa has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The aaa could not be saved. Please, try again.');
            }
        }
        $bbbs = $this->Aaas->Bbbs->find('list', ['limit' => 200]);
        $this->set(compact('aaa', 'bbbs'));
        $this->set('_serialize', ['aaa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aaa id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aaa = $this->Aaas->get($id);
        if ($this->Aaas->delete($aaa)) {
            $this->Flash->success('The aaa has been deleted.');
        } else {
            $this->Flash->error('The aaa could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
