<!DOCTYPE html>
<?php
session_start();
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
                <a class="nav-link active nav2header" href="#">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav2header" href="#quienes">¿Quiénes somos? </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav2header" href="#que">¿Qué hacemos?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav2header" href="#mas">Más información</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav2header" href="#otra">Otra información</a>
            </li>

            <?php
            if ($_SESSION["username"] != "") {

                ?>
                <li class="nav-item">
                    <a class="nav-link nav2header" href="index2.php">Panel de control</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav2header" href="logout.php">Cerrar sesión</a>
                </li>
                <?php
            } else {
                ?>
                <li class="nav-item">
                    <a class="nav-link nav2header" href="loginin.php">Iniciar sesión</a>
                </li>
                <?php
            }
            ?>


        </ul>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/marguerite-daisy-beautiful-beauty.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/thumb-1920-411820.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/X3CPUeT.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
    </header>


    <section class="section" id="quienes">
        <div class="container">
            <h2>¿Quiénes somos?</h2>
            <p class="justify-content-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum magna felis, quis egestas mi ullamcorper at. In id enim risus. Mauris lobortis quam arcu. Donec vehicula massa nec enim vestibulum, at consectetur justo condimentum. Cras at volutpat velit. Cras leo justo, pellentesque luctus vehicula eget, consequat et mi. Cras dictum mauris in odio gravida tincidunt. Phasellus sed massa in lectus tincidunt faucibus quis ac diam.</p>
            <p class="justify-content-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum magna felis, quis egestas mi ullamcorper at. In id enim risus. Mauris lobortis quam arcu. Donec vehicula massa nec enim vestibulum, at consectetur justo condimentum. Cras at volutpat velit. Cras leo justo, pellentesque luctus vehicula eget, consequat et mi. Cras dictum mauris in odio gravida tincidunt. Phasellus sed massa in lectus tincidunt faucibus quis ac diam.</p>
        </div>
    </section>

       <section class="section hacemos" id="que">
        <div class="container">
            <h2>¿Qué hacemos?</h2>
            <p class="justify-content-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum magna felis, quis egestas mi ullamcorper at. In id enim risus. Mauris lobortis quam arcu. Donec vehicula massa nec enim vestibulum, at consectetur justo condimentum. Cras at volutpat velit. Cras leo justo, pellentesque luctus vehicula eget, consequat et mi. Cras dictum mauris in odio gravida tincidunt. Phasellus sed massa in lectus tincidunt faucibus quis ac diam.</p>
            <p class="justify-content-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum magna felis, quis egestas mi ullamcorper at. In id enim risus. Mauris lobortis quam arcu. Donec vehicula massa nec enim vestibulum, at consectetur justo condimentum. Cras at volutpat velit. Cras leo justo, pellentesque luctus vehicula eget, consequat et mi. Cras dictum mauris in odio gravida tincidunt. Phasellus sed massa in lectus tincidunt faucibus quis ac diam.</p>
        </div>
    </section>

    <section class="section" id="mas">
        <div class="container">
            <h2>Más información</h2>
            <p class="justify-content-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum magna felis, quis egestas mi ullamcorper at. In id enim risus. Mauris lobortis quam arcu. Donec vehicula massa nec enim vestibulum, at consectetur justo condimentum. Cras at volutpat velit. Cras leo justo, pellentesque luctus vehicula eget, consequat et mi. Cras dictum mauris in odio gravida tincidunt. Phasellus sed massa in lectus tincidunt faucibus quis ac diam.</p>
            <p class="justify-content-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum magna felis, quis egestas mi ullamcorper at. In id enim risus. Mauris lobortis quam arcu. Donec vehicula massa nec enim vestibulum, at consectetur justo condimentum. Cras at volutpat velit. Cras leo justo, pellentesque luctus vehicula eget, consequat et mi. Cras dictum mauris in odio gravida tincidunt. Phasellus sed massa in lectus tincidunt faucibus quis ac diam.</p>
        </div>
    </section>
    <section class="section hacemos clearfix" id="otra" >
      <div class="container ">
    <h2>Otra Información</h2>
    <div class="columns is-gapless">
<div class="column">
  <img src="img/foto_nueva.jpg" class="rounded fotos" alt="Información de la pulga">
</div>
<div class="column">
  <p class="foto_texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam elementum leo dui, vitae dapibus magna sodales eget. Cras ultricies justo quis metus interdum condimentum. Vestibulum eget velit id erat venenatis luctus in vel ante. Aenean mi justo, iaculis ac tempor a, vehicula non odio. Ut interdum turpis a justo pretium tempus. Donec laoreet posuere eros et dignissim. Nam interdum congue condimentum. Nunc sed mauris a ex faucibus aliquam ac in
  sapien.</p>
</div>
<div class="column">
<img src="img/foto_nueva.jpg" class="rounded fotos" alt="Información de la pulga">
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
