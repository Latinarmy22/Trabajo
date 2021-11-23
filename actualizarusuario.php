<?php
    if (!isset($_POST["nombre_usuario"]) || !isset($_POST["nickname"]) || !isset($_POST["email"]) || !isset($_POST["pass"]) || !isset($_POST["rol"])) {
        exit();
    }

    
    if (!isset($_POST["idusuario"])) {
        exit();
    }

    $idusuario = $_POST["idusuario"];

    include_once "conexion.php";
    $nombre_usuario = $_POST["nombre_usuario"];
    $nickname = $_POST["nickname"];
    $email = $_POST["email"];
    $clave = $_POST["pass"];
    $rol = $_POST["rol"];
    $fecha = date("j/m/y");

    $pass = password_hash($clave, PASSWORD_DEFAULT);

    $query = $base_de_datos->prepare("UPDATE USUARIOS SET IDusuario = ?, nombre_usuario = ?, nickname = ?, email = ?, pass = ?, IDrol = ?, fecha = ? WHERE IDusuario = $idusuario");

    $update = $query->execute([$idusuario, $nombre_usuario, $nickname, $email, $pass, $rol, $fecha]);

    if($update === true){
        header("Location: infousuarios.php");
    }else{
        echo "F";
    }
?>