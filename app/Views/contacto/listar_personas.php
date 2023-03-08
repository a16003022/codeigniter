<div id="contenido_de_la_tabla" class="row">
        <?php //print_r($datos)?>
        <div>
            <div class="col-sm-12">
                <h2>Catalogo de personas</h2>
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                        <?php
                        foreach($persona as $dat){
                            echo "<tr>";
                                echo "<td>".$dat['nombre']."</td>";
                                echo "<td>".$dat['direccion']."</td>";
                                echo "<td>".$dat['correo']."</td>";
                                echo "<td><button type='button' class='btn btn-success' onclick='carga_modal(".$dat["id"].")'>Editar/Borrar</button></td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>