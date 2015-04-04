<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bbbs Controller
 *
 * @property \App\Model\Table\BbbsTable $Bbbs
 */
class BbbsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('bbbs', $this->paginate($this->Bbbs));
        $this->set('_serialize', ['bbbs']);
    }

    /**
     * View method
     *
     * @param string|null $id Bbb id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bbb = $this->Bbbs->get($id, [
            'contain' => ['Aaas', 'AaasBbbs']
        ]);
        $this->set('bbb', $bbb);
        $this->set('_serialize', ['bbb']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bbb = $this->Bbbs->newEntity();
        if ($this->request->is('post')) {
            $bbb = $this->Bbbs->patchEntity($bbb, $this->request->data);
            if ($this->Bbbs->save($bbb)) {
                $this->Flash->success('The bbb has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The bbb could not be saved. Please, try again.');
            }
        }
        $aaas = $this->Bbbs->Aaas->find('list', ['limit' => 200]);
        $this->set(compact('bbb', 'aaas'));
        $this->set('_serialize', ['bbb']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bbb id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bbb = $this->Bbbs->get($id, [
            'contain' => ['Aaas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bbb = $this->Bbbs->patchEntity($bbb, $this->request->data);
            if ($this->Bbbs->save($bbb)) {
                $this->Flash->success('The bbb has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The bbb could not be saved. Please, try again.');
            }
        }
        $aaas = $this->Bbbs->Aaas->find('list', ['limit' => 200]);
        $this->set(compact('bbb', 'aaas'));
        $this->set('_serialize', ['bbb']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bbb id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bbb = $this->Bbbs->get($id);
        if ($this->Bbbs->delete($bbb)) {
            $this->Flash->success('The bbb has been deleted.');
        } else {
            $this->Flash->error('The bbb could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
