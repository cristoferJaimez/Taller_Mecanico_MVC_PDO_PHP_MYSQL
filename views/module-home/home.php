<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.css" media="screen" />
    <title>HOME</title>
</head>
<body>

<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Taller Mecanico</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="views/module-signUp/signUp.html">Nuevo Cliente</a></li>
        <li><a href="module-signUp/signUp.html">Reporte</a></li>
      </ul>
    </div>
  </nav>

    <div class="container">
        <div class="row col m12">
       

            <?php foreach($this->MODEL->listarClientes() as $dato) :  ?>
                
                    <div class="col m4">
                     <div class="card-panel teal lighten-1 center-aling">
                        <div class="card-image center-align" >
                        <img src="assets/img/cliente.png" class="materialboxed" width="250px" >
                        <br/>
                        <br/>
                        <span class="card-title center-align">Cliente número <?php echo $dato->idcliente;  ?> </span>
                        </div>
                        <h6 class="aling-center"><?php echo $dato->nombre." ".$dato->apellido;  ?></h6>
                        
                        <a class="btn orange waves-effect"  title="<?php echo $dato->idcliente?>" id="<?php echo $dato->idcliente?>"><i class="">Historial</i></a>
                        <a class="btn green waves-effect"   title="<?php echo $dato->idcliente?>" id="<?php echo $dato->idcliente?>"><i class="">Nuevo</i></a>
                        
                    </div>

                       
                       
                    </div>
                     
            <?php endforeach; ?>
        </div>
    </div>
   
  <script src="../../assets/js/jQuery.min.js"></script>  
  <script src="../../assets/js/materialize.js"></script>  
</body>
</html>