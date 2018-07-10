
<?php
session_start();
require 'conexionBD/connection.php';

$ban = 0;

// Destruir todas las variables de sesi�n.
$_SESSION = array();
if (!isset($_SESSION["username"])){
  $_SESSION["username"] = "";

}
//validacion del lado del servidor (campos no vacios)
if (empty($_POST["username"]) || empty($_POST["password"])) {
  header("Location:loginin.php");
  exit();
}else{
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
      exit();
  }else{
      header("Location: loginin.php");
      exit();
  }
}
 ?>
