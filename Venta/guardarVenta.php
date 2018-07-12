<?php

require '../Cart.php';
session_start();
if (isset($_POST['guardarVenta'])) {

  require '../db_connection.php';
  print_r( $_SESSION['cart']);
    $oldCart =  $_SESSION['cart'];
    $carro = new Cart($oldCart);
    print_r($carro);
    foreach ($carro->items as $cart) {
      echo "=====><<<<<====<br>";
      echo $cart['item']->descripcion;
      echo "<br>";
    }
    echo "<br>";

    $productos = serialize($carro);
    print_r($productos);
    echo "<br>";
    $nota = "ESTO ES LA NOTA";
    $db4 = null;
    $total_venta = $_POST['totalPrecio'];
    try {
        $db4 = getDB();
        $stmt4 = $db4->prepare("INSERT INTO ventas (productos,total,nota)
          VALUES(:field1,:field2,:field3)");

        $stmt4->execute(array(':field1' => $productos, ':field2' => $total_venta,
        ':field3' => $nota ));

    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
    session_start();
    session_unset();
    session_destroy();
     header("Location: pre_venta.php");
     exit();
}else{
  header("Location: ../index2.php");
  exit();
}
 ?>
