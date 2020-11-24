<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuerpo PHP</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">

    <script src="https://kit.fontawesome.com/7ef58eec5b.js" crossorigin="anonymous"></script>

    <?php session_start(); ?>
</head>
<body>
    <?php require("views\includes\cabecera.php")?>

    <h1 id='tituloNoticias'>Noticias</h1>

    <section>
    <?php require("views/includes/cuerpo.php")?>
    </section>

    <aside>
    <h2 id="tituloAsideUsuarios" class="titulosAside">Lista de usuarios</h2>
    <?php require("views/includes/list_usuarios.php"); ?>

    <h2 id="tituloAsideNoticias" class="titulosAside">Lista de noticias</h2>
    <?php require("views/includes/list_noticias.php"); ?>
    </aside>

    <?php include("views/includes/footer.php"); ?>
</body>
</html>