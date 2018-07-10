<!DOCTYPE html>
<?php
session_start();
date_default_timezone_set("America/Mexico_City");
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
        <h2>Compras realizadas</h2>
</header>



<?php
require 'conexionBD/connection.php';

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$ban = 0;
/*
  $bandera=0;
  $bandera1=0;
  $id_producto="";
  $descripcion="";
  $tipo_producto="";
  $cantidad=0;
  $precio=0;*/
  if(!empty($_POST['Agregar'])){  //validar la entrada a aesta accion


    /*
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

if ($bandera==0){*/

          $user=$_SESSION["username"];

          $fecha=$_POST['fecha'];
					$id_producto=$_POST['id_producto'];
		      $cantidad=$_POST['cantidad'];
          $user=$_SESSION["username"];
          echo ($user);
         $conexion->query("INSERT INTO compra (folio_compra,fecha_compra,id_producto,cantidad,usuario)
           values('','".$fecha."','".$id_producto."','".$cantidad."','".$user."')");
           $id_producto=$_POST['id_producto'];
           $sql="Select * from inventario where id_producto='".$id_producto."'";
           echo ($sql);
           $conexion->real_query($sql);
           $resultado = $conexion->use_result();
           while ($fila = $resultado->fetch_assoc()) {

             $cantidad2=$fila["cantidad"];
           }
           $cantidad=$cantidad2+$cantidad;
           echo ($cantidad);
           $conexion->query("UPDATE inventario SET cantidad='".$cantidad."' where id_producto='".$id_producto."'");

          //mysql_query($sql4);

          ?>
           <script type="text/javascript">
   alert('Producto registrado con exito')

   </script>  <?php
   $id_producto="";
   $descripcion="";
   $tipo_producto="";
   $cantidad=0;




}
if(!empty($_POST['Buscar'])){  //validar la entrada a aesta accion
  $ban=0;
  $id_producto=$_POST['id_producto'];
  $sql="Select * from inventario where id_producto='".$id_producto."'";
  echo ($sql);
  $conexion->real_query($sql);
  $resultado = $conexion->use_result();
  while ($fila = $resultado->fetch_assoc()) {
    $descripcion=$fila["descripcion"];
    $tipo_producto=$fila["tipo_producto"];
    $cantidad=$fila["cantidad"];
    $precio=$fila["precio"];
    $ban=1;
  }
  if ($ban==0){
    ?>
    <script type="text/javascript">
alert('Producto no encontrado, favor de validar')
</script>
<?php
  }
}

if(!empty($_POST['Modificar'])){  //validar la entrada a aesta accion
 $bandera=0;
  $id_producto=$_POST['id_producto'];
  $sql3="Select id_producto from inventario where id_producto='".$id_producto."'";
  echo ($sql3);
  $conexion->real_query($sql3);
  $resultado = $conexion->use_result();
  while ($fila = $resultado->fetch_assoc()) {
    $id_producto=$_POST['id_producto'];
    $descripcion=$_POST['descripcion'];
    $tipo_producto=$_POST['tipo_producto'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];
    $ban=1;
  }
  echo ($tipo_producto);

  /*$conexion->query("UPDATE inventario SET (id_producto,descripcion,tipo_producto,cantidad,precio)
    values('".$id_producto."','".$descripcion."','".$tipo_producto."','".$cantidad."','".$precio."')");*/
$conexion->query("UPDATE inventario SET descripcion='".$descripcion."',tipo_producto='".$tipo_producto."',cantidad='".$cantidad."',precio='".$precio."' WHERE id_producto='".$id_producto."'");
echo ($sql2);
}
if(!empty($_POST['Eliminar'])){
   $ban=0;
    $id_producto=$_POST['id_producto'];
    $sql3="Select id_producto from inventario where id_producto='".$id_producto."'";
    echo ($sql3);
    $conexion->real_query($sql3);
    $resultado = $conexion->use_result();
    while ($fila = $resultado->fetch_assoc()) {
      $ban=1;
    }
    if ($ban==0){
      ?>
      <script type="text/javascript">
alert('No se encontro registro, favor de volver a intentar')
      </script>
      <?php
    }
    else {
    $conexion->query("DELETE FROM inventario WHERE id_producto='".$id_producto."'");
    echo ($sql2);
    ?>

    <script type="text/javascript">
    alert('Producto eliminado')

    </script>
    <?php
   }
}
if(!empty($_POST['Limpiar'])){
  $id_producto="";
  $descripcion="";
  $tipo_producto="";
  $cantidad=0;
  $precio=0;
}

?>

<hr />

<form action="compras.php" method="post" >

  <p>
<label>Fecha:</label>
<br>
<input type="date-datetime-local" name="fecha" step="1"  id="fecha" value="<?php echo date("Y-m-d h:i:sa");?>">
<br>
<label>Id del producto:</label>
<br>
<select name="id_producto" id="id_producto" value="<?php echo($tipo_producto); ?>">

    <?php $sql="SELECT * from inventario";
    $result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable
    if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
    {
        $combobit="";
        while ($row = $result->fetch_array(MYSQLI_ASSOC))
        {
          if ($tipo_producto==$row['id_producto'])
          {
              $combobit .=" <option selected='".$row['id_producto']."'>".$row['id_producto']."</option>";

          }
          else
          {
            $combobit .=" <option value='".$row['id_producto']."'>".$row['id_producto']."</option>"; //concatenamos el los options para luego ser insertado en el HTML

    }
            }
    }
    else
    {
        echo "No hubo resultados";
    }
echo $combobit;
 ?>




</select>

<br>

<label>Cantidad:</label>
<br>
<input name="cantidad" type="text" id="cantidad" placeholder="Cantidad" value="<?php echo($cantidad); ?>">
<br>
<label>Precio:</label>
<br>


<br><br>


<input class="btn btn-primary " type="submit" name="Agregar" value="Agregar" >

<input class="btn btn-primary " type="submit" name="Limpiar" value="Limpiar">
<a href="lista_inventario.php">
  <br><br>
  <button class="btn btn-primary " type="button">Lista de inventario</button>
</a>
</p>
</form>
<hr />



 </body>
</html>
