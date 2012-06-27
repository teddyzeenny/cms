<h1 class="title">Add field</h1>
<?php 
    echo $this->Form->create('Page');
    echo $this->Form->input('title');
    echo $this->Form->input('content');
    echo $this->Form->end('Add');
?>    