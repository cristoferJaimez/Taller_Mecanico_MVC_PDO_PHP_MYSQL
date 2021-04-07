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


    <div class="container">
        <div class="row">
        <table>
        <thead>
          <tr>
              <th>#</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
            <?php foreach($this->MODEL->listarClientes() as $dato) :  ?>
                <tr>
                    <td><?php echo $dato->idcliente; ?></td>
                    <td><?php echo $dato->nombre; ?></td>
                    <td><?php echo $dato->apellido; ?></td>
                </tr>    
            <?php endforeach; ?>
        </tbody>
      </table>
        </div>
    </div>
    
</body>
</html>