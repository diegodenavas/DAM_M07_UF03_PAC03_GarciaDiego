<?php require("models/funciones_bd.php");

$controlador = new Funciones_bd();

$noticias=$controlador->consultarNoticia("1=1 ORDER BY Hora_creacion DESC LIMIT 5");

foreach ($noticias as $noticia) {
    echo 
    "<div class='noticia'>
        <h2 class='titulo'>" . $noticia[1] . "</h2>
        <div class='contenedorAutor_Fecha'>
            <p class='autor'><img class='iconoFecha' src='imagenes/usuario.png'/>" . $noticia[3] . "</p>
            <p class='fecha'><img class='iconoPass' src='imagenes/calendario-anual.png'/>" . $noticia[4] . "</p>
        </div>
        <p class='contenido'>" . $noticia[2] . "</p>
        <p class='like'" . $noticia[5] . "</p>
        </div>";
}
?>
