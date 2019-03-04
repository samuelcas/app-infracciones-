<?php

include ("conexioncompa.php");

$con=mysqli_connect($host,$user,$pw)or die("problemas al conectar");

mysqli_select_db($con,$db) or die("problemas en  db");
 if ($_POST["TIPO"]) {
 	$consulta=mysqli_query($con,"SELECT c.ID,c.DESCRIPCION,v.VALOR FROM comparendo c LEFT JOIN valor V ON c.ID_VALOR = v.ID WHERE c.TIPO like '%".$_POST["TIPO"]."%'");
	$consulta->data_seek(0);
	while ($fila = $consulta->fetch_assoc()) {
	    echo utf8_encode($fila['DESCRIPCION']) .". El valor de la infraccion es $ ". $fila['VALOR'] . "\n";exit();
	}
}


?>