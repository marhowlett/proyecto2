<!DOCTYPE html>
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
    <title>La Pulga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="css/134027.png" />
    <link rel="stylesheet" type="text/css" href="css/prueba.css" />
</head>

<body>

    <header>

        <div class="text-center">
            <img src="img/logo-regalo.png" alt="" width="100px" height="100px">
        </div>
        <h1 class="text-center">La Pulga</h1>

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

    <section class="hero content1">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            <a class="panel_menu" href="inventario.php"> Inventario</a>
          </h1>
        </div>
      </div>
    </section>
    <section class="hero content2">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            <a class="panel_menu" href="compras.php"> Compras</a>
          </h1>
        </div>
      </div>
    </section>
    <section class="hero content1">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            <a class="panel_menu" href="Venta/pre_venta.php"> Ventas</a>
          </h1>
        </div>
      </div>
    </section>
    <section class="hero content2">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            <a class="panel_menu" href="index.php"> Volver al inicio</a>
          </h1>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018

        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

     <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
