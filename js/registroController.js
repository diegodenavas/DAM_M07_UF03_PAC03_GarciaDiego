window.onload = function(){

    var form2 = document.getElementById("formLogin2");

    document.getElementById("formLogin2").addEventListener("submit", cargarLogin, false);


    function cargarLogin(event){

        var datos2 = new FormData(form2);

        fetch("../controllers/form_usuarioController.php", {
            method: 'post',
            body: datos2
        })
        .then(procesarRespuesta)
        .catch(mostrarError);

        event.preventDefault();

    }


    function mostrarError(err){
        console.log(err);
    }


    function procesarRespuesta(response){

        if(response.ok) {

            response.text().then(function(text){

                console.log(text);

                if(text == "validado1") location.href= "/usuarios.php";
                else if(text == "validado2") location.href = "../index.php";
                else {

                    let mensajeError2 = document.getElementById("mensajeError2");

                    mensajeError2.innerHTML = "No se han podido registrar el usuario";

                    mensajeError2.animate([
                        {transform: "translateX(0px)"}, 
                        {transform: "translateX(10px)"}, 
                        {transform: "translateX(-10px)"}, 
                        {transform: "translateX(0px)"}
                    ],
                        {
                        duration: 200,
                        iterations: 3
                        }
                    );
                }
            });

        } else {
            console.log("peticion fallida");
        }

    }

}