<?php 
   
    //incluir conexion
    include_once 'config/Connect.php';
    $conn = new Connect();
    

    include_once 'controllers/Index.controller.php';
    $controlador = new IndexController();

    

    //peticion GET para pasar parametroas al controlador
    if(!isset($_REQUEST['v'])){
        $controlador->index();
    }else{
        $action = $_REQUEST['v'];
        call_user_func(array($controlador, $action));
    }
?>

