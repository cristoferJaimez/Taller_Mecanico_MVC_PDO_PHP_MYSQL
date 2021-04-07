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

        //CRUD Clientes
        public function guardarCliente(){

        }

        public function buscarCliente(){

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



       public function cargarVehiculos(){
        try {

            $query= "SELECT * FROM `clie_vehi` WHERE cliente_idcliente = ?";
            $smt = $this->conn->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }

       }
       
       
       public function cargarHistorial(){

       }
       

       public function guardarVehiculo(){

       }

       public function guardarRepuesto(){

       }



       

    }
  
    

    
?>