<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Tabla usuarios</title>
</head>

<body>
    <div class="contenedor">
        <?php include('template/sidebar.php')?>
        <div class="caja-derechas">
            <?php include('template/header.php')?>
            <section class="main">
                <!-- <div class="form"> -->
                    <form action="insertarusuario.php" method="post">
                        <div class="form">
                            <h2>Rellena el formulario</h2>
                            <p>Ingresa los datos del usuario que crearas</p>
                            <div> 
                                <label for="Nombre">Ingresa el nombre del usuario:
                                <input type="text" name="nombre_usuario" id="nombre">
                                </label>
                            </div>
                            <div>
                                <label for="Nickname">Ingresa el nickname:
                                <input type="text" name="nickname" id="nickname">
                                </label>
                            </div>
                            <div>
                                <label for="Email"> Ingresa el email:
                                <input type="email" name="email" id="Email">
                                </label>
                            </div>
                            <div>
                                <label for="password">Ingresa la contraseña del usuario:
                                <input type="password" name="pass" id="password">
                                </label>
                            </div>
                            <div>
                                <label for="Tipousuario">¿Que tipo de usuario será?
                                    <select name="rol" id="rol">
                                        <option value="op1" selected>Selecciona un rol</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Operario</option>
                                    </select>
                                </label>
                            </div>
                            <div>
                                <input type="submit" value="Agregar" class="boton">
                            </div>
                        </div>  
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>

</html>