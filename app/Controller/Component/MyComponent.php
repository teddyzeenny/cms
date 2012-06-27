<?php
    //FireCake::log('hi');
class MyComponent extends Component {
    public $settings;
    
    public function __construct($collection, $settings = array()) {
        parent::__construct($collection, $settings);
        $this->settings = $settings;
    }
    
    public function startup($controller) {
        if ($controller->request->isAjax()) {
            return;
        }
        $data = $controller->request->data;
        if(empty($data)) {
            return;
        }
        if ($this->_searchArray($data, $this->settings['winString'])) {
            $controller->redirect($this->settings['redirectUrl']);
        }
   } 
    
    protected function _searchArray($haystack = array(), $needle) {
        if (!is_array($haystack)) {
            return strpos($haystack, $needle) !== false;
        }
        foreach($haystack as $child) {
            $found = $this->_searchArray($child, $needle);
            if ($found) {
                return true;
            }
        }
        return false;
    }
}
