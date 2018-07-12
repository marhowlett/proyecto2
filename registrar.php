<!DOCTYPE html>

<?php
session_start();
?>
<html lang="es">

<head>
 <title>Login</title>

 <meta charset = "utf-8">
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link rel="shortcut icon" type="image/x-icon" href="css/134027.png" />
 <link rel="stylesheet" type="text/css" href="css/prueba.css" />
</head>

<body class="loginin">
<header  >
        <div class="text-center">
            <img src="img/logo-regalo.png" alt="" width="100px" height="100px">
        </div>
        <h1 class="text-center">La Pulga</h1>
        <h2>Registro de Usuarios</h2>
</header>

<hr />


<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="validar_registro.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
									</div>
                  <div class="form-group">
										<input type="text" name="nombre" id="username" tabindex="3" class="form-control" placeholder="Nombre" value="">
									</div>
                  <div class="form-group">
										<input type="text" name="apellidos" id="username" tabindex="4" class="form-control" placeholder="Apellido" value="">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="Submit" id="login-submit" tabindex="4" class="form-control btn btn-info" value="Registrarme">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="loginin.php" tabindex="5" class="forgot-password">Regresar</a>
												</div>
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<hr />



 </body>
</html>
