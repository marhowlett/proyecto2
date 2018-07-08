<!DOCTYPE html>

<html lang="es">

<head>
 <title>Login</title>

 <meta charset = "utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

 <link rel="shortcut icon" type="image/x-icon" href="css/134027.png" />
 <link rel="stylesheet" type="text/css" href="css/prueba.css" />
</head>

<body class="loginin">
<header  >
        <div class="text-center">
            <img src="img/logo-regalo.png" alt="" width="100px" height="100px">
        </div>
        <h1 class="text-center">La Pulga</h1>
        <h2>Modificación de Inventario</h2>
</header>

<?php
session_start();
?>

<?php
include('connection.php');

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
$sql="SELECT * from inventario";
$result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable
if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{
    $combobit="";
    while ($row = $result->fetch_array(MYSQLI_ASSOC))
    {
        $combobit .=" <option value='".$row['descripcion']."'>".$row['id_producto']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
}
else
{
    echo "No hubo resultados";
}

$ban = 0;

  $bandera=0;
  $bandera1=0;
  $id_producto="";
  $descripcion="";
  $tipo_producto="";
  $cantidad=0;
  $precio=0;
  if(!empty($_POST['Agregar'])){  //validar la entrada a aesta accion
 	$id_producto=$_POST['id_producto'];
 $sql1="Select id_producto from inventario where id_producto='".$id_producto."'";
    $conexion->real_query($sql1);
    $resultado = $conexion->use_result();
    while ($fila = $resultado->fetch_assoc()) {
   			 $bandera=1;?>

         <script type="text/javascript">
 alert('Producto repetido, favor de validar')

 </script>
         <?php

    }
    $resultado->close();

if ($bandera==0){
					$id_producto=$_POST['id_producto'];
					$descripcion=$_POST['descripcion'];
					$tipo_producto=$_POST['tipo_producto'];
		      $cantidad=$_POST['cantidad'];
          $precio=$_POST['precio'];


         $conexion->query("INSERT INTO inventario (id_producto,descripcion,tipo_producto,cantidad,precio)
           values('".$id_producto."','".$descripcion."','".$tipo_producto."','".$cantidad."','".$precio."')");

          //mysql_query($sql4);

          ?>
           <script type="text/javascript">
   alert('Producto registrado con exito')

   </script>  <?php

   $id_producto="";
   $descripcion="";
   $tipo_producto="";
   $cantidad=0;
   $precio=0;

				}
}
if(!empty($_POST['Buscar'])){  //validar la entrada a aesta accion


}
?>


<hr />

<form action="inventario.php" method="post" >

  <p>
  <label>Id del producto:</label>
  <br>
  <input name="id_producto" type="text" id="id_producto" required placeholder="Id del producto" <?php echo ($id_producto)?>>
  <br>
  <label>Descripción:</label>
  <br>
<input name="descripcion" type="text" id="descripcion" required placeholder="Descripción">
<br>
<label>Tipo de producto:</label>
<br>
<select name="tipo_producto" id="tipo_producto" required>
    <?php echo $combobit; ?>
</select>

<br>

<label>Cantidad:</label>
<br>
<input name="cantidad" type="text" id="cantidad" required placeholder="Cantidad">
<br>
<label>Precio:</label>
<br>
<input name="precio" type="text" id="precio" required placeholder="precio">


<br><br>


<input class="btn btn-primary " type="submit" name="Agregar" value="Agregar" >
<input class="btn btn-primary " type="submit" name="Buscar" value="Buscar">
<input class="btn btn-primary " type="submit" name="Modificar" value="Modificar">
<input class="btn btn-primary " type="submit" name="Eliminar" value="Eliminar">
<a href="lista_inventario.php">
  <br><br>
  <button class="btn btn-primary " type="button">Lista de inventario</button>
</a>
</p>
</form>
<hr />



 </body>
</html>
