<article>
    <h1 class="title"><?php echo $page['Page']['title']; ?></h1>
    
    <p><?php echo $page['Page']['content']; ?></p>
    <div id="comments">
    <?php foreach($page['Comment'] as $comment): ?>
        <p><?php echo h($comment['content']) . ' by ' . $comment['User']['name']; ?></p>
    <?php endforeach; ?>
    </div>
        
    <?php
    
        if ($user) {
        echo $this->Form->create('Comment', array('action' => 'add'));
        echo $this->Form->input('content');
        echo $this->Form->input('page_id', array(
            'type' => 'hidden',
            'value' => $page['Page']['id']
        ));
        echo $this->Form->end('Add comment');
        
        } else {
            echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login'));
        }
    ?>
            
</article>