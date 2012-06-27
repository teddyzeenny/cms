<?php
class CommentsController extends AppController {
    
    public function add() {
        if (!empty($this->request->data)) {
            $this->Comment->create();
            $this->Comment->save($this->request->data);
            $user = $this->Auth->user('name');
            $this->set('user', $user);
        }
    }
}
?>
