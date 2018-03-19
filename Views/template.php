<?php

    namespace Views;

    $template = new Template();

    class Template
    {
        public function __construct(){
?>
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Admón De Estudiantes</title>
                <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/semantic.css">
                <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/formatos.css">
            </head>
            <body>

                <div class="ui menu inverted large" id="mimenu">
                    <a class="browse item">Administración <i class="dropdown icon"></i></a>
                </div>

                <div class="ui fluid popup bottom left transition hidden">
                    <div class="ui three column relaxed equal height divided grid">
                        <div class="column">
                            <h4 class="ui header">Inicio</h4>
                            <div class="ui link list">
                                <a href="<?php echo URL; ?>" class="item">Ir A Inicio</a>
                            </div>
                        </div>
                        <div class="column">
                            <h4 class="ui header">Estudiantes</h4>
                            <div class="ui link list">
                                <a href="<?php echo URL; ?>estudiantes" class="item">Listar Estudiantes</a>
                                <a href="<?php echo URL; ?>estudiantes/agregar" class="item">Agregar Estudiante</a>
                            </div>
                        </div>
                        <div class="column">
                            <h4 class="ui header">Secciones</h4>
                            <div class="ui link list">
                                <a href="<?php echo URL; ?>secciones" class="item">Listar Secciones</a>
                                <a href="<?php echo URL; ?>secciones/agregar" class="item">Agregar Sección</a>
                            </div>
                        </div>
                    </div>
                </div>
<?php            
        }


        public function __destruct(){
?>        
            <div class="footer clearfix">
                <div class="ui segments">
                    <div class="ui segment" style="background-color: #009688; color: #fff; text-shadow: #000 1px 1px;font-weight: bolder;">
                        2018 | POOMVC | Searito's &copy;
                    </div>
                </div>
            </div>

            <script src="<?php echo URL; ?>Views/Template/js/jquery.js"></script>
            <script src="<?php echo URL; ?>Views/Template/js/semantic.js"></script>
           
            <script>
                $("#mimenu").popup({
                    inline: true,
                    hoverable: true,
                    position: 'bottom left',
                    delay:{
                        show: 300,
                        hide: 400
                    }
                });
            </script>
            </body>
            </html>
<?php            
        }
    }
?>    