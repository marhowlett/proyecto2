
<?php
session_start();
?>

<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "marimar94";
$db_name = "pulga";
$tbl_name = "usuario";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
session_start();
// Destruir todas las variables de sesi�n.
$_SESSION = array();
if (!isset($_SESSION["username"])){
  $_SESSION["username"] = "";

}
$ban = 0;
$user=$_POST["username"];  //lee usuario del formulario
$clave1=$_POST["password"];  //lee clave del formulario
$clave = md5($clave1);
$sql1 = "Select * from usuario where usuario='$user' and contraseña='$clave'";// saca el total masculino
echo ($sql1);
$conexion->real_query($sql1);
$resultado = $conexion->use_result();
while ($fila = $resultado->fetch_assoc()) {
    $ban = 1;
}
$resultado->close();
if ($ban==1){
    $_SESSION["username"]=$user;
    header("Location: index2.php");
}else{
    header("Location: loginin.php");
}
 ?>
