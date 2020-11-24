<?php

session_start();

require("../models/funciones_bd.php");

$titulo = $_POST["titulo"];
$contenido = $_POST["contenido"];

$arrayDatos = array($titulo, $contenido, $_SESSION["usuario"][1]);

$controller = new Funciones_bd();

$respuesta = $controller->insertarNoticia("noticias", $arrayDatos);

if(!$respuesta){
    header("Location: ../views/noticias.php");
}else{
    echo "No se ha podido registrar el usuario";
}

?>