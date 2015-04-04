<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AaasBbbs Controller
 *
 * @property \App\Model\Table\AaasBbbsTable $AaasBbbs
 */
class AaasBbbsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Aaas', 'Bbbs']
        ];
        $this->set('aaasBbbs', $this->paginate($this->AaasBbbs));
        $this->set('_serialize', ['aaasBbbs']);
    }

    /**
     * View method
     *
     * @param string|null $id Aaas Bbb id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aaasBbb = $this->AaasBbbs->get($id, [
            'contain' => ['Aaas', 'Bbbs']
        ]);
        $this->set('aaasBbb', $aaasBbb);
        $this->set('_serialize', ['aaasBbb']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aaasBbb = $this->AaasBbbs->newEntity();
        if ($this->request->is('post')) {
            $aaasBbb = $this->AaasBbbs->patchEntity($aaasBbb, $this->request->data);
            if ($this->AaasBbbs->save($aaasBbb)) {
                $this->Flash->success('The aaas bbb has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The aaas bbb could not be saved. Please, try again.');
            }
        }
        $aaas = $this->AaasBbbs->Aaas->find('list', ['limit' => 200]);
        $bbbs = $this->AaasBbbs->Bbbs->find('list', ['limit' => 200]);
        $this->set(compact('aaasBbb', 'aaas', 'bbbs'));
        $this->set('_serialize', ['aaasBbb']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aaas Bbb id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aaasBbb = $this->AaasBbbs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aaasBbb = $this->AaasBbbs->patchEntity($aaasBbb, $this->request->data);
            if ($this->AaasBbbs->save($aaasBbb)) {
                $this->Flash->success('The aaas bbb has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The aaas bbb could not be saved. Please, try again.');
            }
        }
        $aaas = $this->AaasBbbs->Aaas->find('list', ['limit' => 200]);
        $bbbs = $this->AaasBbbs->Bbbs->find('list', ['limit' => 200]);
        $this->set(compact('aaasBbb', 'aaas', 'bbbs'));
        $this->set('_serialize', ['aaasBbb']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aaas Bbb id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aaasBbb = $this->AaasBbbs->get($id);
        if ($this->AaasBbbs->delete($aaasBbb)) {
            $this->Flash->success('The aaas bbb has been deleted.');
        } else {
            $this->Flash->error('The aaas bbb could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
