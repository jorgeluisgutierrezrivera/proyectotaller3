<?= $this->extend('Layouts/web')?>

<?= $this->section('contenido')?>

<?= view('partials/_form-error')?>


<form action="<?=route_to('usuario.register_post')?>" method="post">
<label for="ciusu_id">CI de Usuario:</label>
        <input type="number" name="ciusu_id" placeholder="CI de Usuario" id="ciusu_id">
        <label for="nombre_usuario">Nombre:</label>
        <input type="text" name="nombre_usuario" placeholder="Nombre del Usuario" id="nombre_usuario">
        <label for="apellido_usuario">Apellido:</label>
        <input type="text" name="apellido_usuario" placeholder="Apellido del Usuario" id="apellido_usuario"> 
        <label for="direccion_usuario">Dirección:</label>
        <input type="text" name="direccion_usuario" placeholder="Direccion del Usuario" id="direccion_usuario">
        <label for="correo_usuario">Correo:</label>
        <input type="text" name="correo_usuario" placeholder="Correo del Usuario" id="correo_usuario">
        <label for="telefono_usuario">Telefono:</label>
        <input type="text" name="telefono_usuario" placeholder="Telefono del Usuario" id="telefono_usuario">
        <label for="contrasena_usuario">Contraseña:</label>
        <input type="text" name="contrasena_usuario" placeholder="Contraseña del Usuario" id="contrasena_usuario">

<input type="submit" value="Registrar">
</form>

    <?= $this->endSection()?>