<?php

require("../models/funciones_bd.php");

// Porque definimos variables que pueden ser usadas directamente ?? que nos aporta tenerlas definidas
$id = $_POST["id"];
$titulo = $_POST["titulo"];
$contenido = $_POST["contenido"];
$autor = $_POST["autor"];
$hora_creacion = $_POST["hora_creacion"];

// Que nos aporta tener un array sin control de datos????
$arrayDatos = array($titulo, $contenido, $autor, $hora_creacion);

// Porque llamamos controller algo q es un new de la clase Funciones_bd ??
// Se debe evitar el uso de snake case para la nomenclatura
$controller = new Funciones_bd();

$respuesta = $controller->actualizarNoticia($arrayDatos, $id);

if(!$respuesta){
    header("Location: ../views/noticias.php");
}else{
    echo "No se ha podido actualizar la noticia";
}

?>