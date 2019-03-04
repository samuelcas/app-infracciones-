<?php
		if(!($link=mysqli_connect("localhost","root","")))
{
echo "Error conectando a la base de datos.";
exit();
}
if (!mysqli_select_db("motorepuestos",$link))
{
echo "Error seleccionando la base de datos.";
exit();
}
else
{
echo "Conexión con la base de datos conseguida.<br>";
$ide=$_POST['identificacion'];
$nom=$_POST['nombre'];
$dir=$_POST['direccion'];
$Sql= " insert into clientes
(id_cli,nom_cli,dir_cli,tel_cli) values
('$ide','$nom', '$dir','$tel')";
mysql_query($Sql,$link);
echo "<script>alert('La información ha sido almacenada correctamente');</script>";
}
?>