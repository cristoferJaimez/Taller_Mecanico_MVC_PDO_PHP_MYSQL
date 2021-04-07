<?php 
    include_once 'models/Cliente.model.php';

    class ClienteController
    {
        public $MODEL;


        public function __construct(){
            $this->MODEL = new ClienteModel();            
        }     
 
    }
    

?>