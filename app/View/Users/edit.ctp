<h1>Edit user</h1>
<?php 
    echo $this->Form->create('User', array('action' => 'edit'));
    echo $this->Form->input('name'); 
    echo $this->Form->input('username'); 
    echo $this->Form->input('password'); 
    echo $this->Form->input('id'); 
    echo $this->Form->end('Change'); 
?>