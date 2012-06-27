<?php
class UsersController extends AppController {
    
    public function beforeFilter() {
        parent::beforeFilter();
        
        $this->layout = 'users';        
    }
    public function index() {
        $users = $this->User->find('all', array(
            'order' => 'User.name ASC'
        ));
       
        $this->set(compact('users'));
    }
    
    public function add() {
        if (!empty($this->request->data)) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    public function edit($id) {
        if (empty($this->request->data)) {
            $this->request->data = $this->User->findById($id);
        } else {
            if ($this->User->save($this->request->data)) {
                $this->redirect(array('action' => 'index'));
            }
        }
        $this->request->data['User']['password'] = '';
    }
    
    public function delete($id) {
        if ($this->request->is('get')) {
            $this->User->delete($id);
            $this->redirect(array('action' => 'index'));
        }
    }
    
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Invalid username or password, try again'));
            }
        }
    }
    
    public function logout() {
        $this->redirect($this->Auth->logout());
    }
}
?>
