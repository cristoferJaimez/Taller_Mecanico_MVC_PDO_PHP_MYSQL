<?php 
 class Connect{ 
  
    public static function Conn(){
        $c = new PDO("mysql: host=localhost; dbname=taller_mecanico; charset=utf8","root","");
        $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $c;
    }
} 
?>