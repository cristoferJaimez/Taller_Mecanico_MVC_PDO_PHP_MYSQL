<?php 

    class ClienteModel
    {

        public $conn;

        public function __construct()
        {   
            try {

                $this->conn = Connect::Conn(); //

            } catch (Exception $e) {
                die($e->getMessage());
            }
        
        }


        public function listarClientes(){
            try {

                $query= "SELECT * FROM `cliente`";
                $smt = $this->conn->prepare($query);
                $smt->execute();
                return $smt->fetchAll(PDO::FETCH_OBJ);

            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        
    }
    
    
?>