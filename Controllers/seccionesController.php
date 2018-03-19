<?php
    namespace Controllers;

    use Models\Seccion as Seccion;

    class seccionesController
    {
        private $secciones;


        public function __construct(){
            $this->secciones = new Seccion();
        }

        public function index()
        {
            #print("Hola, Soy El Método Por Defecto Para Las Secciones...");
            $datos = $this->secciones->listar();
            return $datos;
        }


        public function agregar(){
            if ($_POST) {
                $this->secciones->set("nombre", htmlspecialchars($_POST['nombre']));
                $this->secciones->add();

                header("Location: ".URL."secciones");
            }
        }


        public function editar($id){
            if ($_POST) {
                $this->secciones->set("id", $_POST['id']);
                $this->secciones->set("nombre", htmlspecialchars($_POST['nombre']));
                $this->secciones->edit();

                header("Location: " . URL . "secciones");
            }else{
                $this->secciones->set("id", $id);
                $datos = $this->secciones->view();
                return $datos;
            }
        }


        public function eliminar($id){
            $this->secciones->set("id", $id);
            $this->secciones->delete();

            header("Location: " . URL . "secciones");
        }
    }