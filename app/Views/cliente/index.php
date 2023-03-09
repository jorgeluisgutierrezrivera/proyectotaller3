<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Listado de Clientes</h1>

    <td><a href="/cliente/new">Añadir Cliente</a></td>

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
                <td><?= $cli['cicli_id'] ?></td>
                <td><?= $cli['nombre_cliente'] ?></td>
                <td><?= $cli['apellido_cliente'] ?></td>
                <td><?= $cli['direccion_cliente'] ?></td>
                <td><?= $cli['celular_cliente'] ?></td>
                <td><?= $cli['correo_cliente'] ?></td>
                <td><a href="/cliente/show/<?= $cli['cicli_id'] ?>">Mostrar</a>
                <a href="/cliente/edit/<?= $cli['cicli_id'] ?>">Editar</a>
                <form action="/cliente/delete/<?= $cli['cicli_id'] ?>" method="POST">
                <button type="submit">Eliminar</button>
                </form></td>
                
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>