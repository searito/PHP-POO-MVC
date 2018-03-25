<div class="ui container">
    <div class="ui container">
        <h2 class="ui header centered teal" style="margin-top: 5%; margin-bottom: 2%;">Lista De Secciones</h2>

            <table class="ui celled striped selectable table">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th width="20%">Acciones</th>
                    </tr>
                </thead>
                <tbody>
<?php
                    #while($row = mysqli_fetch_array($datos)){
                    while ($row = $datos->fetch(PDO::FETCH_OBJ)) {
                        echo "<tr>
                                    <td class='collapsing'>".$row->id."</td>
                                    <td>".$row->nombre. "</td>
                                    <td>
                                        <a href='" . URL . "secciones/editar/" .$row->id. "' class='ui icon blue button' 
                                            data-tooltip='Editar Datos De " . $row->nombre. "' data-position='top left' data-inverted=''>
                                            <i class='edit outline icon'></i>
                                        </a>

                                        <a href='" . URL . "secciones/eliminar/" . $row->id . "' class='ui icon red button' 
                                            data-tooltip='Eliminar A " . $row->nombre . "' data-position='bottom right' data-inverted=''>
                                            <i class='edit trash alternate outline icon'></i>
                                        </a>
                                    </td>
                              </tr>";
                    }
?>                    
                </tbody>
            </table>
    </div>
</div>