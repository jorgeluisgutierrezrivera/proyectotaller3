<?= $this->extend('Layouts/dashboard')?>
<?= $this->section('contenido')?>
<?= view('partials/_form-error')?>
    <form action="/dashboard/producto/update/<?=$producto->codprod_id ?>" method="POST">
        <?= view('dashboard/producto/_form', ['op' =>'Actualizar'])?>
    </form>

    <?= $this->endSection()?>