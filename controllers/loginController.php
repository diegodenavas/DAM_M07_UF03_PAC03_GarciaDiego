<?php

require("../models/funciones_bd.php");

$email = $_POST["email"];
$pass = $_POST["pass"];

$controller = new Funciones_bd();

$usuario = $controller->consultarUsuario("Email = '$email'");

if(count($usuario) != 1){

    echo "no validado 1";

}else{

    if($usuario[0][2] == $pass) {

        $datosUsuario = array($usuario[0][0], $usuario[0][1], $usuario[0][3], $usuario[0][4], $usuario[0][5], $usuario[0][6], $usuario[0][7], $usuario[0][8], $usuario[0][9]);

        session_start();

        $_SESSION["usuario"] = $datosUsuario;

        echo "validado";
    }else{
        echo "no validado 2";
    }
}

?>