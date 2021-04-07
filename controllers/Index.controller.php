<?php 
 
    include_once 'models/Cliente.model.php';


    class IndexController
    {

        public $MODEL;

        public function __construct(){
            $this->MODEL = new ClienteModel();
        }
        
            
        

        public function index(){
            include_once 'views/module-home/home.php';
        }


        public function nuevoCliente(){
            include_once 'views/module-signUp/signUp.html';
        }


        
    }
?>