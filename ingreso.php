<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>Motorepuestos</title>
    <style type="text/css">
    body,td,th {
  color: #000;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
}
body {
  background-color: while;
  background-image: url(fondo2.jpg);
  background-repeat: repeat-x;
}
    h1 {
  color: #D6D6D6;
}
    </style>
    
        <?php
        require('conexion.php');
            

            $clave = $_POST['Contraseña'];
            $usuario =$_POST['nombre'];

            $stmt = $conexion->prepare('SELECT * FROM usuarios WHERE usuario LIKE "'.$usuario.'" and clave like "'.$clave.'"');
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            if ($resultado) {
              header("Location: servicios.php");
            }else{
              header("Location: login.php?bandera=1");
            }
        ?>
    </body>
<body bgcolor="#D6D6D6">
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp; </p>
</div>
<div align="center">
  <table width="871" height="270" border="1">
    <tr>
      <td width="378">&nbsp;</td>
      <td width="477"><div align="center">BIENVENIDO USUARIO </div></td>
    </tr>
    <tr>
      <td><!-- #BeginDate format:Am1 -->Noviembre 9, 2016<!-- #EndDate --></td>
      <td>INGRESE</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</html> 