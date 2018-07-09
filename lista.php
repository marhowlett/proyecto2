<link
   rel="stylesheet"
   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
   integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
   crossorigin="anonymous"
>

<?php
include('connection.php');

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
$sql1="SELECT * FROM inventario";
   $conexion->real_query($sql1);
   $consultaUsuarios = $conexion->use_result();

?>
<div class="table-responsive">
   <table class="table table-bordered table-striped">
	<thead>
           <tr>
              <!-- definimos cabeceras de la tabla -->
              <th>id_producto</th>
              <th>descripcion</th>
              <th>tipo producto</th>
              <th>Cantidad</th>
              <th>precio</th>
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
