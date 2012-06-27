<h1 class="title">Add user</h1>
<?php 
    echo $this->Form->create('User'); 
    echo $this->Form->input('name'); 
    echo $this->Form->input('username'); 
    echo $this->Form->input('password'); 
    echo $this->Form->end('Add user'); 
?>