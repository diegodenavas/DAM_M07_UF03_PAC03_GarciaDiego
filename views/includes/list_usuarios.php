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
            "<th>Contraseña</th>
            <th>Email</th>
            <th>Edad</th>
            <th>F. nacimiento</th>
            <th>Dirección</th>
            <th>C. postal</th>
            <th>Provincia</th>
            <th>Género</th>";

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
                    "<td>" . $usuario[2] . "</td>
                    <td>" . $usuario[3] . "</td>
                    <td>" . $usuario[4] . "</td>
                    <td>" . $usuario[5] . "</td>
                    <td>" . $usuario[6] . "</td>
                    <td>" . $usuario[7] . "</td>
                    <td>" . $usuario[8] . "</td>
                    <td>" . $usuario[9] . "</td>";

                }
                
                if(isset($_SESSION["usuario"])){
                    echo
                    "<td><a href='form_usuario.php?id=$id'><i class='fas fa-pencil-alt'></i></a></td>
                    <td><a href='../controllers/eliminarUsuario.php?id=" . $usuario[0] . "'><i class='fas fa-trash-alt'></i></a></td>";
                }
                
            echo
            "</tr>";
        }
    ?>
</table>