<nav id="menu">
    <ul id="listaMenu">
        <li class="elementosMenu"><a href="/DAM_M07_UF03_PAC03_GarciaDiego/index.php">Inicio</a></li>
        <li class="elementosMenu"><a href="/DAM_M07_UF03_PAC03_GarciaDiego/views/usuarios.php">Usuarios</a></li>
        <li class="elementosMenu"><a href="/DAM_M07_UF03_PAC03_GarciaDiego/views/noticias.php">Noticias</a></li>
        <?php
        if(isset($_SESSION["usuario"])) {
            echo 
            "<li class='elementosMenu'><a href='/DAM_M07_UF03_PAC03_GarciaDiego/views/form_usuario.php'>Crear usuario</a></li>
            <li class='elementosMenu'><a href='/DAM_M07_UF03_PAC03_GarciaDiego/views/form_noticia.php'>Crear noticia</a></li>
            <li class='elementosMenu'><a href='/DAM_M07_UF03_PAC03_GarciaDiego/controllers/logoutController.php'>Logout</a></li>";
        }
        else{
            echo
            "<li class='elementosMenu'><a href='/DAM_M07_UF03_PAC03_GarciaDiego/views/login.php'>Login</a></li>";
        }
        ?>
    </ul>
</nav>