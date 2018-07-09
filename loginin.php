<!DOCTYPE html>

<?php
session_start();
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
        <h2>Login de Usuarios</h2>
</header>

<hr />

<form action="validar.php" method="post" >

  <p>
    <label>Nombre Usuario:</label>
    <br>
  <input name="username" type="text" id="username" required placeholder="Nombre Usuario">
  <br><br>

  <label>Contraseña:</label>
  <br>
  <input name="password" type="password" id="password" placeholder="Contraseña" required>
  <br><br>

  <input class="btn btn-primary " type="submit" name="Submit" value="Login">
  <a href="registrar.php">
    <button class="btn btn-primary " type="button">Registrar</button>
  </a>
</p>
</form>
<hr />



 </body>
</html>
