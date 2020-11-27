<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/noticias.css">


    <script src="https://kit.fontawesome.com/7ef58eec5b.js" crossorigin="anonymous"></script>

    <?php session_start(); ?>
</head>
<body>
    <?php 
    require("includes/header.php");
    require("includes/cabecera.php"); 
    ?>
    
    <section>
        <?php require("includes/list_noticias.php") ?>
    </section>

    <?php include("includes/footer.php"); ?>
</body>
</html>