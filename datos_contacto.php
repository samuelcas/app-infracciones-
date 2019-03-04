<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>Motorepuestos</title>
    <style type="text/css">
    body,td,th {
	color: #000;
}
body {
	background-color: #666;
	background-image: url(FONDO_CONTAC.jpg);
}
    </style>
    </head>
    <body>
         
   <p>&nbsp;</p>
        <?php
           require('conexion.php');
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $mensaje = $_POST['mensaje'];
            
            try {
              $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql = "INSERT INTO `contactenos` (`nombre`, `apellido`, `correo`, `telefono`, `mensaje`) VALUES ('".$nombre."', '".$apellido."', '".$correo."', '".$telefono."', '".$mensaje."')";
              // use exec() because no results are returned
              $conexion->exec($sql);
              echo "guardado con exito";
            } catch(PDOException $e){
              echo $sql . "<br>" . $e->getMessage();
            }

            $conexion = null;
            exit();
           ?>
    </body>
</html>