<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear noticia</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/formularios.css">

    <?php 
    session_start(); 
    
    require("../models/funciones_bd.php");
    
    if(isset($_GET["id"])) {
        $id = $_GET["id"];

        $controller = new Funciones_bd();

        $noticia = $controller->consultarNoticia("id = $id");
    }
    ?>
</head>
<body>
    <?php 
    require("includes/header.php");
    require("includes/cabecera.php");
    ?>

    <section>
        <form action="<?php if(!isset($_GET["id"])) echo "../controllers/form_noticiaController.php"; else echo "../controllers/actualizar_noticiaController.php"; ?>" id="formLogin" method="POST">
            <?php
            if(isset($_GET["id"])){
                echo 
                "<p class='textoEditar'>Editar " . $noticia[0][1] . "</p>
                <input type='hidden' name='id' value='$id'>";
            }
            ?>

            <div class="campoForm">
                <label for="titulo" class="formLogin-element">
                    Titulo
                </label>
                <input type="text" name="titulo" maxlength="50" <?php if(isset($_GET["id"])) echo "value='".$noticia[0][1]."'"; ?> >
            </div>
            <div class="campoForm">
                <label for="contenido" class="formLogin-element">
                    Contenido
                </label>
            <textarea name="contenido" cols="30" rows="10"><?php if(isset($_GET["id"])) echo $noticia[0][2]; ?></textarea>
            </div>

            <?php
            if(isset($_GET["id"])) {
            ?>

            <div class="campoForm">
                <label for="autor" class="formLogin-element">
                    Autor
                </label>
                <input type="text" name="autor" <?php if(isset($_GET["id"])) echo "value='".$noticia[0][3]."'"; ?> >
            </div>

            <div class="campoForm">
                <label for="hora_creacion" class="formLogin-element">
                    Hora de creación
                </label>
                <input type="datetime" name="hora_creacion" <?php if(isset($_GET["id"])) echo "value='".$noticia[0][4]."'"; ?> >
            </div>
                
            <?php
            }
            ?>

            <input type="submit" value="Enviar">

        </form>
    </section>

    <?php include("includes/footer.php"); ?>
</body>
</html>