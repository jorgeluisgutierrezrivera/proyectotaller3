<?= $this->extend('Layouts/dashboard')?>
<?= $this->section('contenido')?>
    <form action="/dashboard/producto/create" method="POST">
        <?= view('dashboard/producto/_form', ['op' =>'Crear'])?>
    </form>

    <?= $this->endSection()?>