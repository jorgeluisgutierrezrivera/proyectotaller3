<?= $this->extend('Layouts/web')?>

<?= $this->section('contenido')?>

<?= view('partials/_form-error')?>

<form action="<?=route_to('usuario.login_post')?>" method="post">
<label for="correo_usuario">Correo/Usuario:</label>
<input type="text" name="correo_usuario" id="correo_usuario">
<label for="contrasena_usuario">Contraseña:</label>
<input type="text" name="contrasena_usuario" id="contrasena_usuario">

<input type="submit" value="Ingresar">
</form>

    <?= $this->endSection()?>