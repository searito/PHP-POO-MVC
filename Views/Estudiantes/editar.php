<?php $secciones = $estudiantes->listarSecciones(); ?>
<div class="ui container">
    <div class="ui container">
        <h2 class="ui header centered teal" style="margin-top: 5%; margin-bottom: 2%;">Editar Estudiante</h2>

        <div class="ui segments">
            <div class="ui segment">
                <h4 class="ui header blue">Modificar Datos De <?php echo $datos['nombre'];?></h4>

                <div class="ui segments">
                    <div class="ui segment">
                        <div class="ui grid">
                            <div class="five wide column">
                                <img src="<?php echo URL.'Views/Template/imagenes/avatars/'.$datos['imagen'];?>"
                                    class="ui fluid image">
                            </div>
                            <div class="eleven wide column">
                                <form class="ui form" method="post">
                                    <div class="field">
                                        <label for="">Nombre</label>
                                        <input type="text" name="nombre" id="nombre" value="<?php echo $datos['nombre'];?>">
                                    </div>

                                    <div class="fields">
                                        <div class="field">
                                            <label for="">Edad</label>
                                            <input type="number" name="edad" id="edad" value="<?php echo $datos['edad'];?>">
                                        </div>
                                        <div class="field">
                                            <label for="">Promedio</label>
                                            <input type="number" name="promedio" id="promedio" value="<?php echo $datos['promedio']; ?>">
                                        </div>
                                        <div class="field">
                                            <label for="">Sección</label>
                                            <select name="id_seccion" id="id_seccion">
<?php
                                            while ($row = mysqli_fetch_array($secciones)) {
                                                if ($row['id'] == $datos['id_seccion']) {
                                                    echo "<option value='".$row['id']."' selected>".$row['nombre']."</option>";
                                                }else{
                                                    echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                                                }
                                            }
?>                                            
                                            </select>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <input type="hidden" name="id" value="<?php echo $datos['id'];?>">
                                        <input type="submit" value="Actualizar" class="ui button green">
                                        <button type="reset" class="ui button black">Borrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>