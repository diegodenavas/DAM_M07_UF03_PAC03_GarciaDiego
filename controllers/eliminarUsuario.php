<?php

require("../models/funciones_bd.php");

$id = $_GET["id"];

$controlador = new Funciones_bd();

$controlador->eliminarUsuario($id);

header("Location: ../views/usuarios.php")

?>