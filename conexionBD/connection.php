<?php
$s = "localhost";
$bd = "pulga";
$u = "root";
$p = "jjuandaa34";

$conexion = new mysqli($s, $u, $p, $bd);
if ($conexion->connect_errno) {
    echo "no conectado";
}


?>
