<?= $this->extend('Layouts/dashboard')?>
<?= $this->section('contenido')?>
<form action="/dashboard/cliente/update/<?=$cliente['cicli_id'] ?>" method="POST">
        <?= view('dashboard/cliente/_form', ['op' =>'Actualizar'])?>
    </form>

    <?= $this->endSection()?>