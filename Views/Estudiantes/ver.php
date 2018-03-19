<?php $secciones = $estudiantes->listarSecciones(); ?>
<div class="ui container">
    <div class="ui container">
        <h2 class="ui header centered teal" style="margin-top: 5%; margin-bottom: 2%;">Ver Datos Estudiante</h2>

        <div class="ui segments">
            <div class="ui segment">
                <h4 class="ui header blue">Ver Datos De <?php echo $datos['nombre']; ?></h4>

                <div class="ui segments">
                    <div class="ui segment">
                        <div class="ui grid">
                            <div class="six wide column">
                                <img src="<?php echo URL . 'Views/Template/imagenes/avatars/' . $datos['imagen']; ?>"
                                    class="ui fluid image">
                            </div>
                            <div class="ten wide column">
                                <div class="ui item">
                                    <div class="item">
                                        <div class="content">
                                            <h4 class="header">Nombre</h4>
                                            <div class="description">
                                                <?php echo $datos['nombre']; ?>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="item">
                                        <div class="content">
                                            <h4 class="header">Edad</h4>
                                            <div class="description">
                                                <p><?php echo $datos['edad']; ?></p>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="item">
                                        <div class="content">
                                            <h4 class="header">Promedio</h4>
                                            <div class="description">
                                                <p><?php echo $datos['promedio']; ?></p>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="item">
                                        <div class="content">
                                            <h4 class="header">Sección</h4>
                                            <div class="description">
                                                <p><?php echo $datos['NOMBRESECCION']; ?></p>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="item">
                                        <div class="content">
                                            <h4 class="header">Fecha De Registro</h4>
                                            <div class="description">
                                                <p><?php echo $datos['fecha']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>