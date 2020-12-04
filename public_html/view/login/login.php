<?php
session_start();
session_destroy();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SICAAS</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" href="view/login/CSS/estilos_login.css" type="text/css" media="screen">
	<link rel='shortcut icon' type='image/x-icon' href='assets/img/logo.png' />

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>SICAAS</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/" target="_blank"><img style="background-color:; max-height:90px; padding-top:3px; " src="view/login/IMG/logonsena.png"></a></i></span>
					<span><a href="https://sena.territorio.la/cms/index.php" target="_blank"><img style="background-color:; max-height:90px; height: 90%; padding-top:3px; " src="view/login/IMG/territorium.png"></a></i></span>
					
				</div>
			</div>
			<div class="card-body">
				<form action="?c=usuario&a=ingreso" method="post">
					<label style="color: #FFFFFF;">Usuario:</label>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="IDENTIFICACION" placeholder="">
					</div>
					<label style="color: #FFFFFF;">Contraseña:</label>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="CONTRASENA" placeholder="">
					</div>
					
					<br>
					<div class="form-group">
						<div class="d-flex justify-content-center">
							<input type="submit" value="Ingresar" class="btn  login_btn">
						</div>
						
						
						
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center">
					<a href="?c=recuperar">¿Olvidaste tu contraseña?</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="?c=usuario&a=NuevoU">Crea una cuenta</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</html>