<?= $this->extend('Layouts/dashboard')?>
<?= $this->section('header')?>
    Listado de Clientes
<?= $this->endSection()?>
<?= $this->section('contenido')?>
<td><a href="/dashboard/cliente/new">Añadir Cliente</a></td>

    <table>
        <tr>
            <th>
                Cédula de Identidad
            </th>
            <th>
                Nombre
            </th>
            <th>
                Apellido
            </th>
            <th>
                Dirección
            </th>
            <th>
                Celular
            </th>
            <th>
                Correo Electrónico
            </th>
            <th>
                Opciones
            </th>
        </tr>
        <?php foreach ($clientes as $key => $cli) :?>
            <tr>
                <td><?= $cli->cicli_id ?></td>
                <td><?= $cli->nombre_cliente ?></td>
                <td><?= $cli->apellido_cliente ?></td>
                <td><?= $cli->direccion_cliente ?></td>
                <td><?= $cli->celular_cliente ?></td>
                <td><?= $cli->correo_cliente ?></td>
                <td><a href="/dashboard/cliente/show/<?= $cli->cicli_id ?>">Mostrar</a>
                <a href="/dashboard/cliente/edit/<?= $cli->cicli_id ?>">Editar</a>
                <form action="/dashboard/cliente/delete/<?= $cli->cicli_id ?>" method="POST">
                <button type="submit">Eliminar</button>
                </form></td>
                
            </tr>
        <?php endforeach ?>
    </table>

<?= $this->endSection()?>
