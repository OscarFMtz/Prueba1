<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Categ Controller
 *
 * @property \App\Model\Table\CategTable $Categ
 * @method \App\Model\Entity\Categ[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $categ = $this->paginate($this->Categ);

        $this->set(compact('categ'));
    }

    /**
     * View method
     *
     * @param string|null $id Categ id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categ = $this->Categ->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('categ'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categ = $this->Categ->newEmptyEntity();
        if ($this->request->is('post')) {
            $categ = $this->Categ->patchEntity($categ, $this->request->getData());
            if ($this->Categ->save($categ)) {
                $this->Flash->success(__('The categ has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categ could not be saved. Please, try again.'));
        }
        $this->set(compact('categ'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categ id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categ = $this->Categ->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categ = $this->Categ->patchEntity($categ, $this->request->getData());
            if ($this->Categ->save($categ)) {
                $this->Flash->success(__('The categ has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categ could not be saved. Please, try again.'));
        }
        $this->set(compact('categ'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categ id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categ = $this->Categ->get($id);
        if ($this->Categ->delete($categ)) {
            $this->Flash->success(__('The categ has been deleted.'));
        } else {
            $this->Flash->error(__('The categ could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
