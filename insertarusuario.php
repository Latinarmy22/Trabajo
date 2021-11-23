<?php
    if (!isset($_POST["nombre_usuario"]) || !isset($_POST["nickname"]) || !isset($_POST["email"]) || !isset($_POST["pass"]) || !isset($_POST["rol"])) {
        exit();
    }

    include_once "conexion.php";
    $nombre_usuario = $_POST["nombre_usuario"];
    $nickname = $_POST["nickname"];
    $email = $_POST["email"];
    $clave = $_POST["pass"];
    $rol = $_POST["rol"];
    $fecha = date("j/m/y");

    $pass = password_hash($clave, PASSWORD_DEFAULT);
    $consulta = $base_de_datos->prepare("SELECT * FROM usuarios");
    $consulta->execute();
    $cantidad = $consulta->rowCount();

    $idusuario = $cantidad+1;

    $query = $base_de_datos->prepare(" INSERT INTO USUARIOS(IDusuario,nombre_usuario,nickname,email,pass, IDrol,fecha) values (?,?,?,?,?,?,?)");

    $insert = $query->execute([$idusuario, $nombre_usuario, $nickname, $email, $pass, $rol, $fecha]);

    if($resultado = true){
        header("Location: infousuarios.php");
    }else{
        echo "F";
    }
?>