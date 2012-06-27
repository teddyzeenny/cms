<?php
class Page extends AppModel {
    
    public $actsAs = array('UserOwned');
    
    public $belongsTo = array(
        'User'
    );
    
    public $hasMany = array (
        'Comment'
    );
    
    public $validate = array(
        'title' => array(
            'valid' => array(
                'rule' => 'notEmpty',
                'required' => 'create',
                'message' => 'Title is mandatory'
            )
        ),
        'content' => array(
            'valid' => array(
                'rule' => 'notEmpty',
                'required' => 'create',
                'message' => 'Content is mandatory'
            )
        ),
    );
    
    public function beforeSave() {
        if (!parent::beforeSave()) {
            return false;
        }
        
        if (isset($this->data['Page']['title'])) {
            $title = $this->data['Page']['title'];
            $originalSlug = $slug = strtolower(Inflector::slug($title, '-'));
            $i = 1;
            $conditions = array(
                'conditions' => array(
                    'Page.slug' => $slug
                )
            );
            
            
            if (isset($this->data['Page']['id'])) {
                $conditions['conditions']['Page.id <>'] = $this->data['Page']['id'];
            }
            
            $found = $this->find('count', $conditions);
            
            while ($found != 0) {
                $slug = $originalSlug . '-' . $i;
                $i++;
                $conditions['conditions']['Page.slug'] = $slug;
                $found = $this->find('count', $conditions);
            }
            $this->data['Page']['slug'] = $slug;
        }
        
//        if (!isset($this->data['Page']['id'])) {
//            $this->data['Page']['user_id'] = AuthComponent::user('id');
//        }
        $curUnix = date('U');
        $mysqlDateTime = $this->unixToMysqlDateTime($curUnix);
        FireCake::log($mysqlDateTime);
        
        return true;
    }
}
?>
