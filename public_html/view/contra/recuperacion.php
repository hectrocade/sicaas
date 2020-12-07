<?php
session_start();
session_destroy();
 ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="view/contra/CSS/estilos_contrasena.css" type="text/css" media="screen">
<link rel='shortcut icon' type='image/x-icon' href='assets/img/logo.png' />


<!DOCTYPE html>
<html>
<head>
	<title>Contraseña</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<meta charset="utf-8">

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3><center>Recordar contraseña</center></h3>
			</div>
			<div class="card-body">
				<form action="?c=usuario&a=Recuperar" method="post">
					<p style="color: #FFFFFF">Los datos de recuperación de su cuenta seran enviados al correo electrónico registrado, si ya no hace uso de este comuníquese con un administrador.</p>
					
					<p style="color: #FFFFFF">Número de identificación</p>
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
						</div>
						<input type="text" name="DOCUMENTO" pattern="[0-9]{9,12}" class="form-control" placeholder="Ingrese su número de identificación">
					</div>
					<div class="form-group">
						<input type="submit" value="Enviar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center">
					<a class="blank" href="?c=login">Volver a la página principal</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>