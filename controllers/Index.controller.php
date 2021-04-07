<?php 
 
    include_once 'models/Cliente.model.php';


    class IndexController
    {

        public $MODEL;

        public function __construct(){
            $this->MODEL = new ClienteModel();
        }
        
            
        

        function index(){
            include_once 'views/module-home/home.php';
        }
    }
?>