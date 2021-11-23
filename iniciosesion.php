<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio de sesion</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="main.js"></script>
</head>
<body class="contenedor">
    <div class="tabla box ">
        <h1 class="titulo">Bienvenido</h1>
        <p>Ingresa tus credenciales</p>
        <form action="login.php" method="post">
            <div>
                <input type="text" name="user" placeholder="Ingresa tu usuario">
            </div>
            <div>
                <input type="password" name="password" placeholder="Ingresa tu contraseña">
            </div>
            <div>
                <input type="submit" value="enviar" class="boton">
            </div>
            </form>
        </div>
    </div>
</body>
</html>