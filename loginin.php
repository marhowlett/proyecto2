<!DOCTYPE html>

<html lang="es">

<head>
 <title>Login</title>

 <meta charset = "utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

 <link rel="shortcut icon" type="image/x-icon" href="css/134027.png" />
 <link rel="stylesheet" type="text/css" href="css/prueba.css" />
</head>

<body class="loginin">
<header  > <h1>Login de Usuarios</h1>

</header>

<hr />

<form action="validar.php" method="post" >

  <p>
    <label>Nombre Usuario:</label>
    <br>
  <input name="username" type="text" id="username" required>
  <br><br>
    
  <label>Contraseña:</label>
  <br>
  <input name="password" type="password" id="password" required>
  <br><br>
    
  <input class="btn btn-primary " type="submit" name="Submit" value="Login">
  <a href="registrar.php">
    <button class="btn btn-primary " type="button">Registrar</button>
  </a>
</form>
<hr />



 </body>
</html>
