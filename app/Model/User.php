<?php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
    
    public $validate = array(
        'name' => array(
            'valid' => array(
                'rule' => 'notEmpty',
                'required' => 'create',
                'message' => 'Name is mandatory'
            )
        ),
        'username' => array(
            'valid' => array(
                'rule' => 'notEmpty',
                'required' => 'create',
                'message' => 'Username is mandatory'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'Username already taken'
            )
        ),
        'password' => array(
            'valid' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'on' => 'create',
                'message' => 'Password is mandatory'
            )
        )
    );
    
    
    
    public function beforeSave() {
        if (!parent::beforeSave()) {
            return false;
        }
        if (!empty($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        } else {
            unset($this->data['User']['password']);
        }        
    }
}
?>
