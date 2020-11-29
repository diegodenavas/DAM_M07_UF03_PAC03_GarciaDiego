<?php

session_start();

require("../models/funciones_bd.php");

$nombre = $_POST["nombre"];
$pass = $_POST["pass"];
$email = $_POST["email"];
$edad = $_POST["edad"];
$fechaNacimiento = $_POST["nacimiento"];
$direccion = $_POST["direccion"];
$codigoPostal = $_POST["cpostal"];
$provincia = $_POST["provincia"];
$genero = $_POST["genero"];

$arrayDatos = array($nombre, $pass, $email, $edad, $fechaNacimiento, $direccion, $codigoPostal, $provincia, $genero);

$controller = new Funciones_bd();

$respuesta = $controller->insertarUsuario("usuarios", $arrayDatos);



if($respuesta){
    if(isset($_SESSION["usuario"])) echo "validado1";
    else echo "validado2";
}else echo "no validado";


?>
