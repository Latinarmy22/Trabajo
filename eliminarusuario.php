<?php
    if(!isset($_GET["idusuario"])){
        exit();
    }

    $idusuario=$_GET["idusuario"];

    include_once("conexion.php");
    $sentencia = $base_de_datos->prepare("DELETE FROM USUARIOS WHERE idusuario = ?");
    $resultado = $sentencia->execute([$idusuario]);
    if($resultado === true){
        header("Location: infousuarios.php");
        $sentencia2 = $base_de_datos->prepare("UPDATE USUARIOS SET idusuario = idusuario-1 WHERE idusuario>$idusuario");
        $resultado = $sentencia2->execute();
    }else {
        echo "F";
    }
?>