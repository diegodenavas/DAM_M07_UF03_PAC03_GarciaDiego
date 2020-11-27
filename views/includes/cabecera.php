<nav id="menu">
    <ul id="listaMenu">
        <?php if(basename($_SERVER["PHP_SELF"]) != "index.php"){ ?>
            <li class="elementosMenu"><a href="../index.php">Inicio</a></li>
            <li class="elementosMenu"><a href="usuarios.php">Usuarios</a></li>
            <li class="elementosMenu"><a href="noticias.php">Noticias</a></li>
        
        <?php
            if(isset($_SESSION["usuario"])) {
                echo 
                "<li class='elementosMenu'><a href='form_usuario.php'>Crear usuario</a></li>
                <li class='elementosMenu'><a href='form_noticia.php'>Crear noticia</a></li>
                <li class='elementosMenu'><a href='../controllers/logoutController.php'>Logout</a></li>";
            }
            else{
                echo
                "<li class='elementosMenu'><a href='login.php'>Login</a></li>";
            }
        }else{
            echo
            "<li class='elementosMenu'><a href='index.php'>Inicio</a></li>
            <li class='elementosMenu'><a href='views/usuarios.php'>Usuarios</a></li>
            <li class='elementosMenu'><a href='views/noticias.php'>Noticias</a></li>";

            if(isset($_SESSION["usuario"])) {
                echo 
                "<li class='elementosMenu'><a href='views/form_usuario.php'>Crear usuario</a></li>
                <li class='elementosMenu'><a href='views/form_noticia.php'>Crear noticia</a></li>
                <li class='elementosMenu'><a href='controllers/logoutController.php'>Logout</a></li>";
            }
            else{
                echo
                "<li class='elementosMenu'><a href='views/login.php'>Login</a></li>";
            }
        }
        ?>
    </ul>
</nav>