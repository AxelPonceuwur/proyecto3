<!DOCTYPE html>
<html>
<head>
  <title>Mercado Libre</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.js"></script>
</head>
<body background="gray.png">
  <nav class="navbar navbar-default" style="background-color: yellow; border: 0px; margin-bottom: 0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="ml.PNG" width="130px"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" style="width: 600px; height:40px;" class="form-control" placeholder="Buscar productos, marcas y más...">
        </div><br>
      </form>
    <ul class="nav navbar-nav">        
      <form class="navbar-form navbar-left">
          <span><a href="https://www.mercadolibre.com.mx/mercado-puntos/envio-gratis?c_campaign=mercadopuntos-envio-gratis#c_id=/home/menu-notification/element&c_element_order=1"><img align="right" src="gratis.png" style="height: 40px;"></a></span>
      </form>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>
  <nav class="navbar navbar-default"style="background: yellow; border: 0px; margin-top: 0px;" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
      <form class="navbar-form navbar-left">
        <div class="form-group">
         
        </div><br>
      
      </form>
    <ul class="nav navbar-nav" >
    <li><button type="Submit" class="btn btn-default" style="background-color: yellow; border: 0px"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Ingresa tu<br>codigo postal</button></li>        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://www.mercadolibre.com.mx/vehiculos/#menu=categories">Vehículos</a></li>
            <li><a href="#">Tecnología</a></li>
            <li><a href="#">Accesorios para vehículos</a></li>
            <li><a href="#">Hogar y electrodomesticos</a></li>
            <li><a href="#"> Deportes y al aire libre</a></li>
            <li><a href="#">Belleza y cuidado personal</a></li>
            <li><a href="#">Joyas y Relojes</a></li>
            <li><a href="#">Herramientas e Industrias</a></li>
            <li><a href="#">Libros</a></li>
            <li><a href="#">Juguetes y bebés </a></li>
            <li><a href="#">Inmuebles</a></li>
            <li><a href="#">Moda</a></li>
            <li><a href="#">Tiendas Oiciales</a></li>
            <li><a href="#">Supermercado </a></li>
            <li><a href="#">Ver Más Categorías</a></li>

          </ul>
        </li>
      </ul>
          <ul class="nav navbar-nav">
        <li class=""><a href="#"><h6>Historial</h6><span class="sr-only">(current)</span></a></li>
        <li><a href="#"><h6>Descuentos Exclusivos</h6></a></li>
         <li class=""><a href="#"><h6>Descuentos de la semana</h6><span class="sr-only">(current)</span></a></li>
        <li><a href="#"><h6>Ofertas de la semana</h6></a></li> <li class="">
           <li><a href="#"><h6>Vender</h6></a></li> <li class=""> 
            <li><a href="#"><h6>Ayuda</h6></a></li> <li class="">
             <li><a href="#"><h5>Crea tu cuenta</h5></a></li> <li class="">
           <li><a href="#"><h5>Ingresa</h5></a></li> <li class=""> 
            <li><a href="#"><h5>Compras</h5></a></li> <li class="">
              <li><a href=""><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a> </li>
      </ul>
      <form class="navbar-form navbar-left">
     
      </form>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>
 <?php

$server= "localhost";
$username = "root";
$pass = "";
$db = "mercado";

$conexion = new mysqli ( $server, $username, $pass, $db);

if ($conexion->connect_error) {
    die("Error en la conexion:" . $conexion->connect_error);
}
$sql="SELECT * FROM productos";
$data= $conexion->query($sql);
echo '<table class="table table-hover" style="background-color: black; margin-top: 100px">';
echo '<thead>';
echo '<tr>';
echo '<th><a class="btn btn-xs btn-primary" href="registro.php">Registrar</a></th>';
echo '<th>Nombre</th>';
echo '<th>ID</th>';
echo '<th>Cantidad</th>';
echo '<th>Color</th>';
echo '</tr>';
echo '</thead';
echo '<tbody> ';
while ($obj=$data->fetch_object()) {
echo '<tr><td><a class="btn btn-xs btn-primary" href="editarProducto.php?id='.$obj->id.'">Editar</a><a class="btn btn-xs btn-primary"style="margin-left:20px;"  href="eliminar.php?id='.$obj->id.'">Eliminar</a></td>';
echo '<td>'.$obj->nombre.'</td>';
echo '<td>'.$obj->id.'</td>';
echo '<td>'.$obj->cantidad.'</td>'; 
echo '<td>'.$obj->color.'</td>';


} echo '</tbody> </table>'
?>
<!-- Jsp para que funcione el menu-->
<script src="js/bootstrap.js"></script>
</body>
</html>