<h1 class="title">Welcome to users</h1>
<table id="diplay-pages">
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Action</th>
    </tr>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?php echo $user['User']['name']; ?></td>
            <td><?php echo $user['User']['username']; ?></td>
            <td>
                <?php 
                    echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); 
                    echo ' | ';
                    echo $this->Html->link('Delete', array('action' => 'delete', $user['User']['id'])); 
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->Html->link('Add new user', array('action' => 'add')); ?>