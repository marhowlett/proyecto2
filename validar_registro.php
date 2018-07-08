
<?php
session_start();
?>

<?php
include('connection.php');

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$ban = 0;

  $bandera=0;
  $bandera1=0;
   $mens="";
 	$wuser=$_POST['username'];
 $sql1="Select usuario from usuario where usuario='".$wuser."'";
    $conexion->real_query($sql1);
    $resultado = $conexion->use_result();
    while ($fila = $resultado->fetch_assoc()) {
   			 $bandera=1;?>

         <script type="text/javascript">
 alert('Cuenta ya registrada, intentar de nuevo')

 </script>
         <?php
			   header("Location: registrar.php");
    }
    $resultado->close();

if ($bandera==0){
					$wuser=$_POST['username'];
					$wnombre=$_POST['nombre'];
					$wapellido=$_POST['apellidos'];
		      $wpassword2=$_POST['password'];
				 $wpassword = md5($wpassword2);
         $conexion->query("INSERT INTO usuario (usuario,contraseña,nombre,apellidos)
           values('".$wuser."','".$wpassword."','".$wnombre."','".$wapellido."')");
          ?>
           <script type="text/javascript">
   alert('Gracias por registrarte, inicia sesión para continuar')

   </script>  <?php
  
    header("Location: loginin.php");
				}





?>
