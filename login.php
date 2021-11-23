<?php
if (!isset($_POST["user"]) || !isset($_POST["password"])) {
    exit();
}
    include_once 'conexion.php';
    
    $nickname = $_POST['user'];
    $password = $_POST['password'];

    $consulta = $base_de_datos->prepare("SELECT nickname,pass FROM usuarios WHERE nickname='$nickname'");
    $consulta->execute();
    $cantidad = $consulta->rowCount();

    if($cantidad==1){
        $row = $consulta->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password,$row['pass'])){
            header("Location: index.php");
        }
        else{
            echo "contraseña incorrecta";   
        }
    }else{
        echo $cantidad;
    }
?>