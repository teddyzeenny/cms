<h1 class="title">Pages available:</h1>
<table id="diplay-pages">
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>User</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pages as $page):?>
            <tr>
                <td><?php echo $page['Page']['title']; ?></td>
                <td><?php echo $page['Page']['content']; ?></td>
                <td><?php echo $page['User']['name']; ?></td>
                <td>
                    <?php 
                        echo $this->Html->link('Edit', array('action' => 'edit', $page['Page']['id'])); 
                        echo " | ";
                        echo $this->Html->link('Delete', array('action' => 'delete', $page['Page']['id'])); 
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p><?php echo $this->Paginator->prev(); ?></p>
<?php echo $this->Paginator->counter(
    'Page {:page} of {:pages}, showing {:current} records out of
     {:count} total, starting on record {:start}, ending on {:end}'
);?>
<p><?php echo $this->Paginator->next(); ?></p>
<?php 
echo $this->Html->link('Add Page', array(
    'controller' => 'pages',
    'action' => 'add'
)); 
?>