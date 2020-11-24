<?php

    class Conexion extends PDO{

        private $bdd = 'mysql:dbname=m07;host=localhost';
        private $user;
        private $pass;


        public function __construct($user, $pass){

            $this->user = $user;
            $this->pass = $pass;

            try {

                parent::__construct($this->bdd, $this->user, $this->pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

            } catch (PDOException $e) {

                //echo $e->getMessage();

                echo "ERROR AL CONECTAR CON LA BASE DE DATOS";

            }

        }

    }

?>