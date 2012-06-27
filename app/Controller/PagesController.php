<?php
class PagesController extends AppController {
    
    public $components = array('Security');
    
    public $paginate = array(
        'limit' => 2,
        'contain' => array (
            'User'
        ),
        'order' => array(
            'Page.created' => 'asc'
        )
    );
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('display', 'getTopNav'));
        $action = $this->request->params['action'];
        
        if (in_array($action, array('index', 'add', 'edit'))) {
            $this->layout = 'cms';
        }
    }
    
    public function getTopNav() {
        return $this->Page->find('all', array(
            'order' => 'Page.created ASC'
        ));
    }
    public function index() {
        $pages = $this->paginate('Page');
        $this->set(compact('pages'));
        
    }
    
    public function display($slug) {
        $this->Page->contain(array(
            'Comment' => array(
                'User',
                'order' => array(
                    'Comment.created asc'
                )
            )
        ));
        $page = $this->Page->findBySlug($slug);
        
        
        $user = $this->Auth->user();
        $this->set(compact('page','user'));
    }
    
    public function add() {
        if (!empty($this->request->data)) {
            $this->Page->create();
            
            if ($this->Page->save($this->request->data)) {
                $this->redirect(array(
                    'controller' => 'pages',
                    'action' => 'index'
                ));
            }
        }
    }
    
    public function edit($id) {
        $this->Page->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Page->read();
        } else {
            if (!empty($this->request->data)) {
                if ($this->Page->save($this->request->data)) {
                    $this->redirect(array(
                        'action' => 'index'
                    ));
                }
            }
        }
    }
    
    public function delete($id) {
        $this->Page->id = $id;
        if ($this->request->is('get')) {
            $this->Page->delete($id);
            $this->redirect(array(
                'action' => 'index'
            ));
        }
    }
}