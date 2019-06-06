<?php

$server= "localhost";
$username = "root";
$pass = "";
$db = "mercado";

$conexion = new mysqli ( $server, $username, $pass, $db);

if ($conexion->connect_error) {
    die("Error en la conexion:" . $conexion->connect_error);
}
$nombre =$_POST["nombre"];
$cantidad = $_POST["cantidad"];
$color =$_POST["color"];

$sql = "INSERT INTO productos (nombre, cantidad, color)
VALUES('$nombre', '$cantidad', '$color')";

if ($conexion->query($sql) === TRUE){
	header("Location:index.php");
} else {
	echo "Error: " .$sql. "<br>" . $conexion->error;

}

?>