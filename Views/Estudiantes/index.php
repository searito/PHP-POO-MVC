<div class="ui container">
    <div class="ui container">
        <h2 class="ui header centered teal" style="margin-top: 5%; margin-bottom: 2%;">Lista De Estudiantes Activos</h2>
        
            <table class="ui very basic collapsing selectable celled table" style="margin-left: 10%; margin-top:6%;">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Sección</th>
                        <th>Promedio</th>
                        <th>Acción</th>
                    </tr>
                </thead>

                <tbody>
<?php
                #while ($row = mysqli_fetch_array($datos)) {
                while ($row = $datos->fetch(PDO::FETCH_OBJ)) {
                    #echo $row['nombre']."<br>";
                    echo"<tr>
                        <td>
                            <h4 class='ui image header'>
                                <img src='".URL."Views/Template/imagenes/avatars/".$row->imagen."' class='ui mini rounded image'>
                                <div class='content'>".$row->nombre."<div class='sub header'>Estudiante</div></div>
                            </h4>
                        </td>
                        <td>" . $row['edad'] . "</td>
                        <td>".$row['NOMBRESECCION']."</td>
                        <td>" . $row['promedio'] . "</td>
                        <td>
                            <a href='".URL."estudiantes/ver/".$row->id."' class='ui icon black button' 
                                data-tooltip='Ver Datos De ".$row->nombre."' data-position='bottom top' data-inverted=''>
                                <i class='eye icon'></i>
                            </a>

                            <a href='".URL."estudiantes/editar/".$row->id."' class='ui icon blue button' 
                                data-tooltip='Editar Datos De ".$row->nombre. "' data-position='top left' data-inverted=''>
                                <i class='edit outline icon'></i>
                            </a>

                            <a href='" . URL . "estudiantes/eliminar/" . $row->id. "' class='ui icon red button' 
                                data-tooltip='Eliminar A " . $row->nombre. "' data-position='bottom right' data-inverted=''>
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