<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/estilos.css">

    <?php 
    
    session_start(); 

    require("../models/funciones_bd.php");
    
    if(isset($_GET["id"])) {
        $id = $_GET["id"];

        $controller = new Funciones_bd();

        $usuario = $controller->consultarUsuario("id = $id");
    }

    ?>
</head>
<body>
    <?php require("includes/cabecera.php") ?>

    <form action="<?php if(!isset($_GET["id"])) echo "../controllers/form_usuarioController.php"; else echo "../controllers/actualizar_usuarioController.php"; ?>" method="POST" id="formLogin">

        <?php
        if(isset($_GET["id"])){
            echo 
            "<p class='textoEditar'>Editar " . $usuario[0][1] . "</p>
            <input type='hidden' name='id' value='$id'>";
        }
        ?>

        <div class="campoForm">
            <label for="nombre" class="formLogin-element">Nombre</label>
            <input type="text" name="nombre" class="formLogin-element" maxlength="20" <?php if(isset($_GET["id"])) echo "value='".$usuario[0][1]."'"; ?> >
        </div>
        <div class="campoForm">
            <label for="pass" class="formLogin-element">Contraseña</label>
            <input type="text" name="pass" class="formLogin-element" maxlength="30" <?php if(isset($_GET["id"])) echo "value='".$usuario[0][2]."'"; ?> >
        </div>
        <div class="campoForm">
            <label for="email" class="formLogin-element">Correo electrónico</label>
            <input type="text" name="email" class="formLogin-element" maxlength="100" <?php if(isset($_GET["id"])) echo "value='".$usuario[0][3]."'"; ?> >
        </div>
        <div class="campoForm">
            <label for="edad" class="formLogin-element">Edad</label>
            <input type="text" name="edad" class="formLogin-element" <?php if(isset($_GET["id"])) echo "value='".$usuario[0][4]."'"; ?> >
        </div>
        <div class="campoForm">
            <label for="nacimiento" class="formLogin-element">Fecha nacimiento</label>
            <input type="text" name="nacimiento" class="formLogin-element" <?php if(isset($_GET["id"])) echo "value='".$usuario[0][5]."'"; ?> >
        </div>
        <div class="campoForm">
            <label for="direccion" class="formLogin-element">Dirección</label>
            <input type="text" name="direccion" class="formLogin-element" maxlength="300" <?php if(isset($_GET["id"])) echo "value='".$usuario[0][6]."'"; ?> >
        </div>
        <div class="campoForm">
            <label for="cpostal" class="formLogin-element">Código postal</label>
            <input type="text" name="cpostal" class="formLogin-element" maxlength="10" <?php if(isset($_GET["id"])) echo "value='".$usuario[0][7]."'"; ?> >
        </div>
        <div class="campoForm">
            <label for="provincia" class="formLogin-element">Provincia</label>
            <input type="text" name="provincia" class="formLogin-element" maxlength="30" <?php if(isset($_GET["id"])) echo "value='".$usuario[0][8]."'"; ?> >
        </div>
        <div class="campoForm">
            <label for="genero" class="formLogin-element">Género</label><br>
            <input type="radio" name="genero" value="Hombre">Hombre
            <input type="radio" name="genero" value="Mujer" <?php if(isset($_GET["id"]) && ($usuario[0][9] == "Mujer")) echo "checked"; ?> >Mujer
        </div>

            <input type="submit" value="Enviar" class="formLogin-element">
    </form>
</body>
</html>