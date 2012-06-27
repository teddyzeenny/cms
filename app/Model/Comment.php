<?php
class Comment extends AppModel {
    
    public $actsAs = array('UserOwned');
    
    public $belongsTo = array(
        'Page', 'User'
    );
    
}
?>
