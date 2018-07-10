<?php
session_start();

?>
<?php
if ($_SESSION["username"] == "") {
  ?>
  <script type="text/javascript">
alert('No olvides registrarte para poder acceder')
location.href="index.php";
  </script>
  <?php
}
    ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>La Pulga</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="css/134027.png" />
    <link rel="stylesheet" type="text/css" href="css/prueba.css" />
<link
   rel="stylesheet"
   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
   integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
   crossorigin="anonymous"
>
</head>
<?php
require 'conexionBD/connection.php';

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
$sql1="SELECT * FROM tipo_producto";
   $conexion->real_query($sql1);
   $consultaUsuarios = $conexion->use_result();

?>
<header>

    <div class="text-center">
        <img src="img/logo-regalo.png" alt="" width="100px" height="100px">

    <h1 class="text-center">La Pulga</h1>
    <h2>Lista de tipos de producto</h2>
  </div>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active nav2header" href="index2.php">Index</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav2header" href="inventario.php">Inventario </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav2header" href="compras.php">Compras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav2header" href="Venta/pre_venta.php">Ventas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav2header" href="index.php">Regresar al incio</a>
        </li>

    </ul>

</header>

<br><br>

<div class="table-responsive">
   <table class="table table-striped align" >
	<thead>
           <tr>
              <!-- definimos cabeceras de la tabla -->
              <th scope="col" class="white2">Tipo producto</th>
              <th scope="col" class="white2">descripcion</th>
           </tr>
        </thead>
        <tbody>
	<?php
           //recorremos resultado de la consulta y añadimos el contenido a la tabla
	    while ($row = $consultaUsuarios->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$row['tipo_producto']."</td>";
              echo "<td>".$row['descripcion']."</td>";
              echo "</tr>";
           }
        ?>
       </tbody>
   </table>
</div>
