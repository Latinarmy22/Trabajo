<?php
    include_once("conexion.php");

    $consulta = "SELECT IDusuario, nombre_usuario, nickname, email, idrol, fecha FROM USUARIOS";

    $sentencia = $base_de_datos->prepare($consulta, [
        PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL,
    ]);

    $sentencia->execute();
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
    <title>Tabla usuarios</title>
</head>

<body>
    <div class="contenedor">
        <?php include('template/sidebar.php')?>
        <div class="caja-derechas">
            <?php include('template/header.php')?>
            <section class="main">
                    <div class="tabla">
                        <table>
                            <thead>
                                <tr>
                                    <td>ID usuario</td>
                                    <td>Nombres</td>
                                    <td>Nicknames</td>
                                    <td>Email</td>
                                    <td>Tipo de usuario</td>
                                    <td>Fecha modificación</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($usuario = $sentencia->fetchObject()){ ?>
                                    <tr>
                                        <td><?php echo $usuario->idusuario?></td>
                                        <td><?php echo $usuario->nombre_usuario?></td>
                                        <td><?php echo $usuario->nickname?></td>
                                        <td><?php echo $usuario->email?></td>
                                        <td><?php
                                            if($usuario->idrol==1){
                                                echo "Administrador";
                                            }else{
                                                echo "Operario";
                                            }
                                        ?></td>
                                        <td><?php echo $usuario->fecha?></td>
                                        <td>
                                            <div class="iconos">
                                                <a href="<?php echo "eliminarusuario.php?idusuario=" . $usuario->idusuario?>"><i class="fas fa-user-minus"></i></a>
                                                <a href="<?php echo "editarusuario.php?idusuario=" . $usuario->idusuario?>"><i class="fas fa-user-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                <div class="boton">
                    <a href="creacionusuario.php"> Nuevo</a>
                </div>
            </section>
        </div>
    </div>
</body>
</html>