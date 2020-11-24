<?php

require("../models/funciones_bd.php");

$id = $_GET["id"];

$controlador = new Funciones_bd();

$controlador->eliminarNoticia($id);

header("Location: ../views/noticias.php")

?>