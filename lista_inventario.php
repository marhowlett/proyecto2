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
    <title>La Pulga de Cuernavaca Morelos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="css/134027.png" />
    <link rel="stylesheet" type="text/css" href="css/prueba.css" />
    <script src="js/fontawesome-all.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"
          integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
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
<body>
<header>

    <div class="text-center">
        <img src="img/logo-regalo.png" alt="" width="100px" height="100px">

    <h1 class="text-center">La Pulga</h1>
    <h2>Lista de inventario</h2>
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
<div class="container">
  <div class="row">
    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Buscar producto.." name="nombre_producto" id="tags">
</div>
  </div>

<div class="table-responsive">
   <table class="table table-striped align">
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
</div>
</body>
<script type="text/javascript">

$(document).ready(function () {
  $("#tags").on("keyup", function () {
                var value = $(this).val().toUpperCase();
                removeHighlighting($("table tr em"));
                $("table tr").each(function (index) {
                    if (index !== 0) {
                        $row = $(this);
                        var $tdElement = $row.find("td:nth-child(2)");
                        var id = $tdElement.text();
                        var matchedIndex = id.indexOf(value);//returns the position of the first occurrence of a specified value in a string.
                        if (matchedIndex != 0) {
                            $row.hide();
                        }
                        else {
                            addHighlighting($tdElement, value);
                            $row.show();
                        }
                    }
                });
            });
            function removeHighlighting(highlightedElements) {
                highlightedElements.each(function () {
                    var element = $(this);
                    element.replaceWith(element.html());
                })
            }

            function addHighlighting(element, textToHighlight) {
                var text = element.text().toUpperCase();
                var highlightedText = '<em>' + textToHighlight + '</em>';
                var newText = text.replace(textToHighlight, highlightedText);
                element.html(newText);
            }
          });
</script>
</html>
