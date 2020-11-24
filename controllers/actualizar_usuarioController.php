<?php

require("../models/funciones_bd.php");

$id = $_POST["id"];
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

$respuesta = $controller->actualizarUsuario($arrayDatos, $id);

if(!$respuesta){
    header("Location: ../views/usuarios.php");
}else{
    echo "No se ha podido actualizar el usuario";
}

?>