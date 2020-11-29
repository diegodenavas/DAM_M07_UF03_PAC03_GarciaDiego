<?php

require('conexion.php');

class Funciones_bd{

    public $conexion;


    public function __construct(){

        $this->conexion = new Conexion('root', '');
    }


    //Methods Noticias

    public function insertarNoticia($tabla, array $valores){

        $consulta = "INSERT into $tabla(Titulo, Contenido, Autor, Hora_creacion, Likes) VALUES(?, ?, ?, NOW(), 0)";

        $stmt = $this->conexion->prepare($consulta);

        $resp = $stmt->execute($valores);
        
        return $resp;

    }


    public function actualizarNoticia(array $valores, $id){

        $consulta = "UPDATE Noticias SET Titulo=?, Contenido=?, Autor=?, Hora_creacion=? WHERE id = $id";

        $stmt = $this->conexion->prepare($consulta);

        $stmt->execute($valores);

    }

    public function actualizarLike($bool, $id){

        if($bool){
            $consulta = "UPDATE Noticias SET likes = (likes + 1) WHERE id = $id";
        }
        else{
            $consulta = "UPDATE Noticias SET likes = (likes - 1) WHERE id = $id";
        }

        $stmt = $this->conexion->prepare($consulta);

        $stmt->execute();
    }


    public function eliminarNoticia($id){

        $consulta = "DELETE FROM noticias WHERE id = $id";

        $stmt = $this->conexion->prepare($consulta);

        $stmt->execute();
    }


    public function consultarNoticia($condicion){

        $consulta = "SELECT * FROM noticias WHERE $condicion";

        $stmt = $this->conexion->prepare($consulta);

        $stmt->execute();

        $registros = $stmt->fetchAll();

        return $registros;
    }



    //Methods Usuarios

    public function insertarUsuario($tabla, array $valores){

        $consulta = "INSERT into $tabla(nombre, contrasena, email, edad, fecha_nacimiento, direccion, codigo_postal, provincia, genero) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conexion->prepare($consulta);

        $resp = $stmt->execute($valores);

        return $resp;

    }


    public function actualizarUsuario(array $valores, $id){

        $consulta = "UPDATE Usuarios SET Nombre=?, Contrasena=?, Email=?, Edad=?, Fecha_nacimiento=?, Direccion=?, Codigo_postal=?, Provincia=?, Genero=? WHERE id = $id";

        $stmt = $this->conexion->prepare($consulta);

        $stmt->execute($valores);

    }


    public function eliminarUsuario($id){

        $consulta = "DELETE FROM Usuarios WHERE id = $id";

        $stmt = $this->conexion->prepare($consulta);

        $stmt->execute();
    }


    public function consultarUsuario($condicion){

        $consulta = "SELECT * FROM Usuarios WHERE $condicion";

        $stmt = $this->conexion->prepare($consulta);

        $stmt->execute();

        $registros = $stmt->fetchAll();

        return $registros;
    }



    //Method close conexion(object Conexion)

    public function cerrarConexion(){

        $this->conexion = null;
    }
}

?>