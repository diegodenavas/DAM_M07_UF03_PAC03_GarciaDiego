<?php

require("../models/funciones_bd.php");

$idNoticia = $_GET["id"];

if(!isset($_COOKIE["like".$idNoticia]) || ($_COOKIE["like".$idNoticia] == "0")){

    $bool = true;

    if(!isset($_SESSION["usuario"])) {
        setcookie("like".$idNoticia, "1", time()+3600, "/");
        setcookie("userLike".$idNoticia, "anónimo", time()+3600, "/");
    }
    else {
        setcookie("like".$idNoticia, "1", time()+3600, "/");
        setcookie("userLike".$idNoticia, $_SESSION["usuario"][1], time()+3600, "/");
    }
}
else{

    $bool = false;

    if(!isset($_SESSION["usuario"])) {
        setcookie("like".$idNoticia, "0", time()+3600, "/");
        setcookie("userLike".$idNoticia, "anónimo", time()+3600, "/");
    }
    else {
        setcookie("like".$idNoticia, "0", time()+3600, "/");
        setcookie("userLike".$idNoticia, $_SESSION["usuario"][1], time()+3600, "/");
    }
}

$controller = new Funciones_bd();

$controller->actualizarLike($bool, $idNoticia);

header("Location: ../views/noticias.php");


?>