<?= $this->extend('Layouts/dashboard')?>
<?= $this->section('header')?>
    Listado de Usuarios
<?= $this->endSection()?>
<?= $this->section('contenido')?>
    <td><a href="/dashboard/usuario/new">Añadir Usuario</a></td>

    <table>
        <tr>
            <th>
                Ci del Usuario
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
                Correo
            </th>
            <th>
                Telefono
            </th>
            <th>
                Contraseña
            </th>
            <th>
                Opciones
            </th>
        </tr>
        <?php foreach ($usuarios as $key => $usu) :?>
            <tr>
                <td><?= $usu->ciusu_id ?></td>
                <td><?= $usu->nombre_usuario ?></td>
                <td><?= $usu->apellido_usuario ?></td>
                <td><?= $usu->direccion_usuario ?></td>
                <td><?= $usu->correo_usuario ?></td>
                <td><?= $usu->telefono_usuario ?></td>
                <td><?= $usu->contrasena_usuario ?></td>
                <td><a href="/dashboard/usuario/show/<?= $usu->ciusu_id ?>">Mostrar</a>
                <a href="/dashboard/usuario/edit/<?= $usu->ciusu_id ?>">Editar</a>
                <form action="/dashboard/usuario/delete/<?= $usu->ciusu_id ?>" method="POST">
                <button type="submit">Eliminar</button>
                </form></td>
                
            </tr>
        <?php endforeach ?>
    </table>
    <?= $this->endSection()?>