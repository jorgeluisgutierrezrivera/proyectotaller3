<?= $this->extend('Layouts/dashboard')?>
<?= $this->section('contenido')?>
<?= view('partials/_form-error')?>
    <form action="/dashboard/cliente/create" method="POST">
        <?= view('dashboard/cliente/_form', ['op' =>'Crear'])?>
    </form>

    <?= $this->endSection()?>