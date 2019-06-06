<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
		<?php

$server= "localhost";
$username = "root";
$pass = "";
$db = "mercado";

$conexion = new mysqli ( $server, $username, $pass, $db);

if ($conexion->connect_error) {
    die("Error en la conexion:" . $conexion->connect_error);
}

$nombre = $_POST["nombre"];
$id =$_POST["id"];
$cantidad = $_POST["cantidad"];
$color =$_POST["color"];


$sql = "UPDATE productos SET nombre='$nombre', id='$id', cantidad='$cantidad', color='$color' WHERE id=$id";
echo $sql;
 if ($conexion->query($sql)== TRUE){
 	header("Location:index.php");
}else{
	echo " ah petao";
}
$conexion->close();
?>
</body>
</html>