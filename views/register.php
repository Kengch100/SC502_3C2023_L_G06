<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h2>Registro</h2>
    <form method="post" action="index.php?action=register">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>


        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
