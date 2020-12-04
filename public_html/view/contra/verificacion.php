<?php
session_start();
session_destroy();
 ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="view/contra/CSS/estilos_validar.css" type="text/css" media="screen">
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
				<form action="?c=usuario&a=Validar" method="post">
					<p style="color: #FFFFFF">Al correo registrado con esta cuenta fue enviado un codigo unico que le permitira reestablecer su contraseña, porfavor ingreselo en el siguiente campo.</p>

					<label style="color : #FFFFFF">Ingrese el codigo de verificación: </label>
					<div class="input-group form-group">
						
						<div class="input-group-prepend">
						</div>
						<input type="password" name="codigo" class="form-control" placeholder="Codigo">
					</div>
					<div class="form-group">
						<input type="submit" value="Verificar" class="btn float-right login_btn">
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