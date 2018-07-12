<?php
    require '../db_connection.php';
    require '../Cart.php';
    $meses = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");
    $fechaactual = getdate();//obtener fecha actual
    $year = $fechaactual['year'];
    $days = date("j");
    $mes = $meses[date('n') - 1];
    $mes_num = date("n");
    $fechaFinal = $year . "/" . $mes_num . "/" . $days;

    try {
            $db = getDB();
            $stmt = $db->prepare("SELECT * from ventas ORDER BY created_at DESC");
            $stmt->execute();
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
        $array_ventas = $stmt->fetchAll(PDO::FETCH_OBJ);
        // $object = (object) $array_ventas;
        //
        // $object_ventas = json_encode($array_ventas);
        // foreach ($array_ventas as $key => $value) {
        //   echo "key ==>".$key;
        //   echo "<br>";
        //   foreach ($value as $v) {
        //
        //     echo "value==>".$v;
        //   }
        // }
        echo "<br>";
        foreach ($array_ventas as $v) {
           $ayuda = $v->productos;
           $aux= unserialize($ayuda->cart);
           echo "ayuda";
           print_r($ayuda);
           echo "<br>";

           echo "aux";
           print_r($aux);
          echo "<br>";
        }
        // $array_ventas->transform(function ($order, $key) {
        //     $order->cart = unserialize($order->cart);
        //     return $order;
        // });
        echo "<br><br>";
        //print_r($array_ventas);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Principal</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"
          integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar is-black">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="../index.php">
        Principal
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="#">
          Menu
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="../Inventario/inventario.php">
            Inventario Sombreros y Fiesta
          </a>
          <a class="navbar-item" href="../InventarioSuples/inventarioSuples.php">
            Inventario Suplementos
          </a>
          <a class="navbar-item" href="../Ventas/pre_venta.php">
            Ventas
          </a>
          <a class="navbar-item" href="../Clientes/clientes.php">
            Clientes
          </a>
          <a class="navbar-item is-active" href="../Envio/envios.php">
            Envios
        </a>
          <a class="navbar-item" href="">
            Form
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="">
            Elements
          </a>
          <a class="navbar-item" href="">
            Components
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=http://localhost:4000&amp;via=jgthms">
              <span class="icon">
                <i class="fab fa-twitter"></i>
              </span>
              <span>
                Tweet
              </span>
            </a>
          </p>
          <p class="control">
            <a class="button is-primary" href="#">
              <span class="icon">
                <i class="fas fa-download"></i>
              </span>
              <span>Download</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>

  <section class="section">
    <div class="container">

    </div>
  </section>
  <script type="text/javascript">
  $(document).ready(function () {
    /** --------> // MOSTRAR MODAL // <-------- **/
    $("#showModal").click(function() {
      $("#myModal").addClass("is-active");
    });
  /** --------> // OCULTAR MODAL // <-------- **/
    $(".modal-close, .modal-background, .delete, #cancelar").click(function() {
       $(".modal").removeClass("is-active");
    });
  });
  </script>
</body>
</html>
