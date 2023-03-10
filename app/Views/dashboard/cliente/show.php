<?= $this->extend('Layouts/dashboard')?>
<?= $this->section('contenido')?>
                <h1><?= $cliente->cicli_id?></h1>
                <h1><?= $cliente->nombre_cliente ?></h1>
                <h1><?= $cliente->apellido_cliente ?></h1>
                <p><?= $cliente->direccion_cliente ?></p>
                <p><?= $cliente->celular_cliente ?></p>
                <p><?= $cliente->correo_cliente ?></p>

                <?= $this->endSection()?>