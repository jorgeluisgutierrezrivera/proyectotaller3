<?= $this->extend('Layouts/dashboard')?>
<?= $this->section('contenido')?>
<?= view('partials/_form-error')?>
    <form action="/dashboard/usuario/create" method="POST">
        <?= view('dashboard/usuario/_form', ['op' =>'Crear'])?>
    </form>

    <?= $this->endSection()?>