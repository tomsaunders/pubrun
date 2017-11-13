<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Runners Controller
 *
 * @property \App\Model\Table\RunnerTable $Runner
 *
 * @method \App\Model\Entity\Runner[] paginate($object = null, array $settings = [])
 */
class RunnersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Runner');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $runners = $this->Runner->find('all', [
            'contain' => ['Result' => ['ResultSet']],
            'conditions' => ['Runner.active_flag' => 'Y']
        ]);
        $this->set(compact('runners'));
        $this->set('_serialize', 'runners');
    }

    /**
     * View method
     *
     * @param string|null $id Runner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $runner = $this->Runner->get($id, [
            'contain' => ['Result']
        ]);

        $this->set('runner', $runner);
        $this->set('_serialize', ['runner']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $runner = $this->Runner->newEntity();
        if ($this->request->is('post')) {
            $runner = $this->Runner->patchEntity($runner, $this->request->getData());
            if ($this->Runner->save($runner)) {
                $this->Flash->success(__('The runner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The runner could not be saved. Please, try again.'));
        }
        $this->set(compact('runner'));
        $this->set('_serialize', ['runner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Runner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $runner = $this->Runner->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $runner = $this->Runner->patchEntity($runner, $this->request->getData());
            if ($this->Runner->save($runner)) {
                $this->Flash->success(__('The runner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The runner could not be saved. Please, try again.'));
        }
        $this->set(compact('runner'));
        $this->set('_serialize', ['runner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Runner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $runner = $this->Runner->get($id);
        if ($this->Runner->delete($runner)) {
            $this->Flash->success(__('The runner has been deleted.'));
        } else {
            $this->Flash->error(__('The runner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
