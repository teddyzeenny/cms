<?php

class NavHelper extends AppHelper {
    public $helpers = array('Html');
    
    public function create($array, $options = array()) {
        $navAttributes = '';
        $liAttributes = '';
        
        $defaultOptions = array(
          'nav' => array(),
          'li' => array()
        );
        $options = Set::merge($defaultOptions, $options);
        
        foreach($options['nav'] as $key => $option) {
            $navAttributes .= ' ' . $key . '="' . $option . '" ';
        }
        foreach($options['li'] as $key => $option) {
            $liAttributes .= ' ' . $key . '="' . $option . '" ';
        }
        
        $nav = '<nav' . $navAttributes . '><ul>';
         
        foreach($array as $value) {
            $key = $value['title'];
            $element = $value['link'];
            if (is_array($element)) {
                $element = $this->Html->url($element);
            }
            $linkAttributes = '';
            if (isset($value['attributes'])) {
                foreach($value['attributes'] as $att => $attVal) {
                    $linkAttributes .= $att . '="' . $attVal . '" ';
                }
            }
            $nav .= '<li' . $liAttributes . '><a href="' . $element . '" ' . $linkAttributes . '>' . $key . '</a></li>';
        }
        $nav .= '</ul></nav>';
        return $nav;
    }
}