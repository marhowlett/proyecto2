<?php
session_start();

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>La Pulga de Cuernavaca Morelos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
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
$sql1="SELECT * FROM inventario";
   $conexion->real_query($sql1);
   $consultaUsuarios = $conexion->use_result();

?>
<div class="table-responsive">
   <table class="table table-striped table-dark alig">
	<thead>
           <tr>
              <!-- definimos cabeceras de la tabla -->
              <th scope="col" class="white2">id_producto</th>
              <th scope="col" class="white2">descripcion</th>
              <th scope="col" class="white2">tipo producto</th>
              <th scope="col" class="white2">Cantidad</th>
              <th scope="col" class="white2">precio</th>
           </tr>
        </thead>
        <tbody>
	<?php
           //recorremos resultado de la consulta y añadimos el contenido a la tabla
	    while ($row = $consultaUsuarios->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$row['id_producto']."</td>";
              echo "<td>".$row['descripcion']."</td>";
	            echo "<td>".$row['tipo_producto']."</td>";
               echo "<td>".$row['cantidad']."</td>";
                echo "<td>".$row['precio']."</td>";
              echo "</tr>";
           }
        ?>
       </tbody>
   </table>
</div>
