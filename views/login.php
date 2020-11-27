<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/formularios.css">

    <?php
    session_start();
    if(isset($_SESSION["usuario"])) header("Location: ../index.php");
    ?>
</head>
<body>
    <?php 
    require("includes/header.php");
    require("includes/cabecera.php"); 
    ?>

    <section>
        <form action="../controllers/loginController.php" method="POST" id='formLogin'>
            <div class="campoForm">
                <label for="email" class="formLogin-element">Correo electrónico</label>
                <input type="text" name="email" class="formLogin-element" maxlength="100" required>
            </div>
            <div class="campoForm">
                <label for="pass" class="formLogin-element">Contraseña</label>
                <input type="text" name="pass" class="formLogin-element" maxlength="30" required>
            </div>

            <input type="submit" value="Enviar" class="formLogin-element">

            <p id="preguntaRegistro">¿Aun no estás registrado?<br>
            Pincha <a href="form_usuario.php">aquí</a></p>
        </form>
    </section>

    <?php include("includes/footer.php"); ?>
</body>
</html>