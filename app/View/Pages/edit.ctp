<h1 class="title">Edit field</h1>
<?php 
    echo $this->Form->create('Page', array('action' => 'edit'));
    echo $this->Form->input('id');
    echo $this->Form->input('title');
    echo $this->Form->input('content');
    echo $this->Form->end('Save');
?>    