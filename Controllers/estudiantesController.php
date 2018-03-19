<?php
    namespace Controllers;
    use Models\Estudiante as Estudiante;
    use Models\Seccion as Seccion;

    class estudiantesController
    {
        private $estudiante;
        private $seccion;


        public function __construct(){
            $this->estudiante = new Estudiante();
            $this->seccion = new Seccion();
        }


        public function index(){
            #print("Hola, Soy El Método Por Defecto De Estudiantes...");
            $datos = $this->estudiante->listar();
            return $datos;
        }


        public function agregar(){    
            if (!$_POST) {
                $datos = $this->seccion->listar();
                return $datos;
            }else{
                $permitidos = array("image/jpg", "image/png", "image/gif", "image/jpeg");
                $limite = 700;

                if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024) {
                    $nombre = date('i-s').$_FILES['imagen']['name'];
                    #$ruta = URL."Views/Template/imagenes/avatars/".$nombre;
                    $ruta = "Views".DS."Template".DS."imagenes".DS."avatars".DS.$nombre;
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

                    $this->estudiante->set("nombre", htmlspecialchars($_POST['nombre']));
                    $this->estudiante->set("edad", htmlspecialchars($_POST['edad']));
                    $this->estudiante->set("promedio", htmlspecialchars($_POST['promedio']));
                    $this->estudiante->set("id_seccion", htmlspecialchars($_POST['id_seccion']));
                    $this->estudiante->set("imagen", $nombre);
                    $this->estudiante->add();
                    header("Location: ".URL."estudiantes");
                }
            }
        }


        public function editar($id){
            if (!$_POST) {
                $this->estudiante->set("id", $id);
                $datos = $this->estudiante->view();
                return $datos;
            }else{
                $this->estudiante->set("id", $_POST['id']);
                $this->estudiante->set("nombre", htmlspecialchars($_POST['nombre']));
                $this->estudiante->set("edad", htmlspecialchars($_POST['edad']));
                $this->estudiante->set("promedio", htmlspecialchars($_POST['promedio']));
                $this->estudiante->set("id_seccion", htmlspecialchars($_POST['id_seccion']));
                $this->estudiante->edit();
                header("Location: " . URL . "estudiantes");
            }
        }


        public function listarSecciones(){
            $datos = $this->seccion->listar();
            return $datos;
        }


        public function ver($id){
            $this->estudiante->set("id", $id);
            $datos = $this->estudiante->view();
            return $datos;
        }


        public function eliminar($id){
            $this->estudiante->set("id", $id);
            $this->estudiante->delete();
            header("Location: " . URL . "estudiantes");
        }
    }

    $estudiantes = new estudiantesController();