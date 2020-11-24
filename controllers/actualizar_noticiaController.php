<?php

require("../models/funciones_bd.php");

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$contenido = $_POST["contenido"];
$autor = $_POST["autor"];
$hora_creacion = $_POST["hora_creacion"];

$arrayDatos = array($titulo, $contenido, $autor, $hora_creacion);

$controller = new Funciones_bd();

$respuesta = $controller->actualizarNoticia($arrayDatos, $id);

if(!$respuesta){
    header("Location: ../views/noticias.php");
}else{
    echo "No se ha podido actualizar la noticia";
}

?>