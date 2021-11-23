<?php
    if(!isset($_GET["idusuario"])){
        exit();
    }

    $idusuario = $_GET["idusuario"];

    include_once "conexion.php";

    $sentencia = $base_de_datos->prepare("SELECT * FROM USUARIOS WHERE IDusuario = ?");
    $sentencia->execute([$idusuario]);

    $usuario = $sentencia->fetchObject();
    if(!$usuario){
        echo "No existe ese ID";
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Modificar usuario</title>
</head>

<body>
    <div class="contenedor">
        <?php include('template/sidebar.php')?>
        <div class="caja-derechas">
            <?php include('template/header.php')?>
            <section class="main">
                <!-- <div class="form"> -->
                    <form action="actualizarusuario.php" method="post">
                        <div class="form">
                            <h2>Rellena el formulario</h2>
                            <p>Ingresa los nuevos datos del usuario</p>
                            <input type="hidden" name="idusuario" value="<?php echo $usuario->idusuario?>">
                            <div> 
                                <label for="Nombre">Ingresa el nombre del usuario:
                                <input type="text" name="nombre_usuario" id="nombre" value="<?php echo $usuario->nombre_usuario?>">
                                </label>
                            </div>
                            <div>
                                <label for="Nickname">Ingresa el nickname:
                                <input type="text" name="nickname" id="nickname" value="<?php echo $usuario->nickname?>">
                                </label>
                            </div>
                            <div>
                                <label for="Email"> Ingresa el email:
                                <input type="email" name="email" id="Email " value="<?php echo $usuario->email?>">
                                </label>
                            </div>
                            <div>
                                <label for="password">Ingresa la contraseña del usuario:
                                <input type="password" name="pass" id="password" value="<?php echo $usuario->pass?>">
                                </label>
                            </div>
                            <div>
                                <label for="Tipousuario">¿Que tipo de usuario será?
                                    <select name="rol" id="rol" value="<?php echo $usuario->tipousuario?>>
                                        <option value="op1" selected>Selecciona un rol</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Operario</option>
                                    </select>
                                </label>
                            </div>
                            <div>
                                <input type="submit" value="Guardar" class="boton">
                            </div>
                        </div>  
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>

</html>