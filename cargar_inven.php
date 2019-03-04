<?php
$usuario ="root";
$contraseña ="";
$conexion = new PDO('mysql:host=localhost;dbname=motorepuestos', $usuario, $contraseña);
$archivo = fopen("inventariopagina.csv", "r");
while($linea = fgetcsv($archivo,0,";")){
	try {
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO inventario (codigo, descripcion, precio) VALUES ('".$linea[0]."', '".$linea[1]."', '".$linea[2] ."')";
      // use exec() because no results are returned
      $conexion->exec($sql);
      } catch(PDOException $e){
      echo $sql . "<br>" . $e->getMessage();
    }
}
fclose($archivo);
?>