<div class="ui container">
    <div class="ui container">
        <h2 class="ui header centered teal" style="margin-top: 5%; margin-bottom: 2%;">Editar Sección</h2>

        <div class="ui segments">
            <div class="ui segment">
                <h4 class="ui header blue">Cambiar Nombre A Sección <?php echo $datos['nombre']; ?> </h4>

                <div class="ui segments">
                    <div class="ui segment">
                        <form method="post" class="ui form">
                            <div class="field">
                                <label for="">Nombre De Sección</label>
                                <input type="text" name="nombre" id="nombre" autofocus required value="<?php echo $datos['nombre']; ?>">
                                <input type="hidden" name="id" value="<?php echo $datos['id']; ?>">
                            </div>

                            <div class="field">
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