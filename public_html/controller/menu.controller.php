<?php
require_once 'model/menu.php';

class menuController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new menu();
    }
    
    public function Index(){
        require_once 'view/index.php';  
    }
    
    
}