window.onload = function(){

    var form2 = document.getElementById("formLogin");

    document.getElementById("formLogin").addEventListener("submit", cargarLogin, false);


    function cargarLogin(event){

        var datos = new FormData(form2);

        fetch("../controllers/loginController.php", {
            method: 'post',
            body: datos
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
                if(text == "validado") location.href= "../index.php";
                else {
                    let mensajeError = document.getElementById("mensajeError");

                    mensajeError.innerHTML = "El usuario o la contraseña son incorrectos";

                    mensajeError.animate([
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