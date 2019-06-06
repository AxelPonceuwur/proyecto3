<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
$id_produ = $_GET['id'];
$sql = "SELECT * FROM productos WHERE id=$id_produ LIMIT 1";
$produ = $conexion->query($sql)->fetch_object();
?>

<div class="container">
<div class="row well">
<div class="col-md-6 col-md-offset-3">
<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id_produ; ?>">

<div class="form-group">
<label for="nombre">nombre:</label>
<input type="text" name="nombre" class="form-control"
value="<?php echo $produ->nombre; ?>">

</div>

<div class="form-group">
<label for="cantidad">cantidad:</label>
<input type="text" name="cantidad" class="form-control" 
value="<?php echo $produ->cantidad; ?>">
</div>
<div class="form-group">
  <label for="color">color:</label>
<input type="text" name="color" class="form-control" 
value="<?php echo $produ->color; ?>">

</div>
<div class="form-group text-center">
<input type="submit" name="btn btn-primary" value="Guardar">
</div>
</form>
</div>
</div>
</div>

</body>
</html>