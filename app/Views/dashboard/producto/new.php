<?= $this->extend('Layouts/dashboard')?>
<?= $this->section('contenido')?>
<?= view('partials/_form-error')?>
    <form action="/dashboard/producto/create" method="POST">
        <?= view('dashboard/producto/_form', ['op' =>'Crear'])?>
    </form>

    <?= $this->endSection()?>