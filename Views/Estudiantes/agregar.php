<div class="ui container">
    <div class="ui container">
        <h2 class="ui header centered teal" style="margin-top: 5%; margin-bottom: 2%;">Agregar Estudiante</h2>

        <div class="ui segments">
            <div class="ui segment">
                <h4 class="ui header blue">Llena El Siguiente Formulario</h4>

                <div class="ui segments">
                    <div class="ui segment">
                        <form class="ui form" method="POST" enctype="multipart/form-data">
                            <div class="field">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" autofocus required>
                            </div>

                            <div class="three fields">
                                <div class="field">
                                    <label for="">Edad</label>
                                    <input type="number" name="edad" id="edad" required>
                                </div>

                                <div class="field">
                                    <label for="">Promedio</label>
                                    <input type="number" name="promedio" id="promedio" required>
                                </div>

                                <div class="field">
                                    <label for="">Sección</label>
                                    <select class="ui fluid dropdown" name="id_seccion" id="id_seccion">
<?php
                                    while ($row = mysqli_fetch_array($datos)) {
                                        echo "<option value=".$row['id'].">".$row['nombre']."</option>";
                                    }
?>                                    
                                    </select>
                                </div>
                            </div>


                            <div class="field">
                                <label for="">Imagen</label>
                                <input type="file" name="imagen" id="imagen" required>
                            </div>

                            <div class="field">
                                <input type="submit" value="Enviar" class="ui button green">
                                <button type="reset" class="ui button black">Borrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
</script>