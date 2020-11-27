<?php ;
if(basename($_SERVER["PHP_SELF"]) == "index.php") require_once("models/funciones_bd.php");
else require_once("../models/funciones_bd.php"); 
?>

    <?php
        $objConsulta = new Funciones_bd();
        $noticias = $objConsulta->consultarNoticia("1=1 ORDER BY id");

        if(basename($_SERVER["PHP_SELF"]) != "index.php"){

            echo "<table>";

            foreach ($noticias as $noticia) {
                $id = $noticia[0];

                echo 
                "<div class='noticia'>
                    <div id='contenedorFlex'>
                        <h2 class='titulo'>" . $noticia[1] . "</h2>";

                        if(isset($_SESSION["usuario"])){
                            echo
                            "<div id='contenedorIconos'>
                                <a href='form_noticia.php?id=$id' class='iconosEditar'><i class='fas fa-pencil-alt'></i></a>
                                <a href='../controllers/eliminarNoticia.php?id=$id' class='iconosEditar'><i class='fas fa-trash-alt'></i></a>
                            </div>";
                        }
                    
                    echo
                    "</div>
                    <div class='contenedorAutor_Fecha'>
                        <p class='autor'><img class='iconoFecha' src='../imagenes/usuario.png'/>" . $noticia[3] . "</p>
                        <p class='fecha'><img class='iconoPass' src='../imagenes/calendario-anual.png'/>" . $noticia[4] . "</p>
                    </div>
                    <p class='contenido'>" . $noticia[2] . "</p>";
                    
                    if(!isset($_COOKIE["like".$id]) || $_COOKIE["like".$id] == "0"){
                        echo "<a href='../controllers/likeController?id=$id' class='iconoLike'><i class='fas fa-thumbs-up'></i></a>".$noticia[5];
                    }else{
                        echo "<a href='../controllers/likeController?id=$id' class='iconoLike'><i class='fas fa-thumbs-up' style='color: rgb(0, 51, 204)'></i></a>".$noticia[5];
                    }

                echo
                "</div>";

            }

            echo "</table>";

        }else{

            echo
            "<table>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                </tr>";

                foreach ($noticias as $noticia) {

                    $id = $noticia[0];
                    
                    echo 
                    "<tr>
                    <td>" . $noticia[0] . "</td>
                    <td>" . $noticia[1] . "</td>";

                    if(isset($_SESSION["usuario"])){

                        if(basename($_SERVER["PHP_SELF"]) != "index.php"){
                            echo
                            "<td><a href='form_noticias.php?id=$id'><i class='fas fa-pencil-alt'></i></a></td>
                            <td><a href='../controllers/eliminarNoticia.php?id=" . $noticia[0] . "'><i class='fas fa-trash-alt'></i></a></td>";
                        }else{
                            echo
                            "<td><a href='views/form_noticia.php?id=$id'><i class='fas fa-pencil-alt'></i></a></td>
                            <td><a href='controllers/eliminarNoticia.php?id=" . $noticia[0] . "'><i class='fas fa-trash-alt'></i></a></td>";
                        }
                        
                    }
                    
                echo
                "</tr>";

                }

            echo
            "</table>";

        }
    ?>