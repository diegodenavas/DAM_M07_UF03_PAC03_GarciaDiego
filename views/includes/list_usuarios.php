<?php ;
if(basename($_SERVER["PHP_SELF"]) == "index.php") require_once("models/funciones_bd.php");
else require_once("../models/funciones_bd.php"); 
?>

<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>

        <?php
        if(basename($_SERVER["PHP_SELF"]) != "index.php"){

            echo
            "<th class='ocultarCasilla'>Contraseña</th>
            <th class='ocultarCasilla2'>Email</th>
            <th class='ocultarCasilla2'>Edad</th>
            <th class='ocultarCasilla2'>F. nacimiento</th>
            <th class='ocultarCasilla'>Dirección</th>
            <th class='ocultarCasilla'>C. postal</th>
            <th class='ocultarCasilla'>Provincia</th>
            <th class='ocultarCasilla'>Género</th>";
        }
        ?>

    </tr>

    <?php
        $objConsulta = new Funciones_bd();
        $usuarios = $objConsulta->consultarUsuario("1=1 ORDER BY id");

        foreach ($usuarios as $usuario) {

            $id = $usuario[0];

            echo 
            "<tr>
                <td>" . $usuario[0] . "</td>
                <td>" . $usuario[1] . "</td>";

                if(basename($_SERVER["PHP_SELF"]) != "index.php"){

                    echo
                    "<td class='ocultarCasilla'>" . $usuario[2] . "</td>
                    <td class='ocultarCasilla2'>" . $usuario[3] . "</td>
                    <td class='ocultarCasilla2'>" . $usuario[4] . "</td>
                    <td class='ocultarCasilla'>" . $usuario[5] . "</td>
                    <td class='ocultarCasilla2'>" . $usuario[6] . "</td>
                    <td class='ocultarCasilla'>" . $usuario[7] . "</td>
                    <td class='ocultarCasilla'>" . $usuario[8] . "</td>
                    <td class='ocultarCasilla'>" . $usuario[9] . "</td>";

                }
                
                if(basename($_SERVER["PHP_SELF"]) != "index.php"){
                    if(isset($_SESSION["usuario"])){
                        echo
                        "<td class='casillasIconos'><a href='form_usuario.php?id=$id' class='iconosEditar'><i class='fas fa-pencil-alt'></i></a></td>
                        <td class='casillasIconos'><a href='../controllers/eliminarUsuario.php?id=" . $usuario[0] . "' class='iconosEditar'><i class='fas fa-trash-alt'></i></a></td>";
                    }
                }else{
                    if(isset($_SESSION["usuario"])){
                        echo
                        "<td><a href='views/form_usuario.php?id=$id'><i class='fas fa-pencil-alt'></i></a></td>
                        <td><a href='controllers/eliminarUsuario.php?id=" . $usuario[0] . "'><i class='fas fa-trash-alt'></i></a></td>";
                    }
                }
                
            echo
            "</tr>";
        }
    ?>
</table>