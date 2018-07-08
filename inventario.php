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
<header  >
        <div class="text-center">
            <img src="img/logo-regalo.png" alt="" width="100px" height="100px">
        </div>
        <h1 class="text-center">La Pulga</h1>
        <h2>Modificación de Inventario</h2>
</header>

<hr />

<form action="validar_registro.php" method="post" >

  <p>
  <label>Id del producto:</label>
  <br>
  <input name="id_producto" type="text" id="id_producto" required placeholder="Id del producto">
  <br>
  <label>Descripción:</label>
  <br>
<input name="descripcion" type="text" id="descripcion" required placeholder="Descripción">
<br>
<label>Tipo de producto:</label>
<br>
<input name="tipo_producto" type="text" id="tipo_producto" required placeholder="Tipo producto">
<br>
<label>Cantidad:</label>
<br>
<input name="cantidad" type="text" id="cantidad" required placeholder="Cantidad">
<br>
<label>Precio:</label>
<br>
<input name="precio" type="text" id="precio" required placeholder="precio">


<br><br>


<input class="btn btn-primary " type="submit" name="Agregar" value="Agregar">
<input class="btn btn-primary " type="submit" name="Buscar" value="Buscar">
<input class="btn btn-primary " type="submit" name="Modificar" value="Modificar">
<input class="btn btn-primary " type="submit" name="Eliminar" value="Eliminar">
<a href="lista_inventario.php">
  <br><br>
  <button class="btn btn-primary " type="button">Lista de inventario</button>
</a>
</p>
</form>
<hr />



 </body>
</html>
