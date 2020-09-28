<?php

class Template{
    // path for the template
    protected $template;
        
    //vars to be passed in
        
    protected $vars = array();
    
    public function __construct($template){
        $this->template = $template;
    }
    
    public function __get($keys){
        return $this->vars[$keys]; 
    }
    
    public function __set($keys, $value){
        $this->vars[$keys] = $value; 
    }
    
    public function __toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();
        include basename($this->template);
        return ob_get_clean();
    }
}