<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <!-- Enlaces CDN de Bootstrap CSS -->
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
	<link href="./assets/css/login.css" rel="stylesheet">
</head>
<body>
<div class="login-wrap">
	<div class="login-html">
		<h1 class="inicio">Bienvenido</h1>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar Sesion</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
		<div class="login-form">
			<form class="sign-in-htm" action="index1.php?action=login" method="post">
				<div class="group">
					<label for="email" class="label">Correo</label>
					<input id="email" type="text" class="input" name="email">
				</div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<br>
				<div class="group">
					<input type="submit" class="button" value="Iniciar Sesion" >
				</div>
				<div class="hr"></div>
			</form>
			<form class="sign-up-htm" action="index1.php?action=register" method="post">
				<div class="group">
					<label for="nombre" class="label">Nombre</label>
					<input id="nombre" type="text" class="input" name="nombre">
				</div>
				<div class="group">
					<label for="password" class="label">Contraseña</label>
					<input id="password" type="password" class="input" data-type="password" name="password">
				</div>
				<div class="group">
					<label for="pass" class="label">repetir Contraseña</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="email" class="label">Correo electronico</label>
					<input id="email" type="text" class="input" name="email">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Registrarse">
				</div>
				<div class="hr"></div>
			</form>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

</body>
<script src="./assets/js/citas.js"></script>   


</html>