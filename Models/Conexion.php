<?php

    namespace Models;

    class Conexion
    {
        private $datos = array(
            "host" => "localhost",
            "user" => "root",
            "pass" => "",
            "db" => "poomvc"
        );

        private $con;

        public function __construct(){
            $this->con = new \mysqli($this->datos['host'], $this->datos['user'], 
                                    $this->datos['pass'], $this->datos['db']);
            
            /*$this->con = new \PDO('mysql:host = $this->datos["host"]; dbname = $this->datos["db"]', 
                                   $this->datos['user'], $this->datos['pass']);*/
        }

        public function consultaSimple($sql){
            $this->con->query($sql);
        }

        public function consultaRetorno($sql){
            $datos = $this->con->query($sql);
            return $datos;
        }
    }