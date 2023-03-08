<div class="container">
<h2><?= $titulo_seccion; ?></h2>
<p><?= $descripcion; ?></p>
    <form method="post" action="<?php echo base_url().'/guardar_persona'?>">
        <div class="form-group row col-12">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control"
            placeholder="Ingresa tu nombre completo">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" class="form-control"
            placeholder="Ingresa tu direccion">
        </div>
        <div class="form-group row">
            <div class='col-'>
                <label for="correo">Correo</label>
                <input type="mail" id="correo" name="correo" class="form-control"><br>
                <input type="submit" class="btn btn-success" value="Registrar">
            </div>
        </div>
    </form>
<script type="text/javascript">
    function carga_modal(id){
        alert(id);
    }
</script>
