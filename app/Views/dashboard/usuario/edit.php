<?= $this->extend('Layouts/dashboard')?>
<?= $this->section('contenido')?>
<?= view('partials/_form-error')?>
    <form action="/dashboard/usuario/update/<?=$usuario->ciusu_id ?>" method="POST">
        <?= view('dashboard/usuario/_form', ['op' =>'Actualizar'])?>
    </form>

    <?= $this->endSection()?>