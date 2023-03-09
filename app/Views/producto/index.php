<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Listado de Productos</h1>

    <td><a href="/producto/new">Añadir Producto</a></td>

    <table>
        <tr>
            <th>
                Código de Producto
            </th>
            <th>
                Nombre
            </th>
            <th>
                Descripción del Producto
            </th>
            <th>
                Categoría del Producto
            </th>
            <th>
                Precio
            </th>
            <th>
                Cantidad
            </th>
            <th>
                Opciones
            </th>
        </tr>
        <?php foreach ($productos as $key => $prod) :?>
            <tr>
                <td><?= $prod['codprod_id'] ?></td>
                <td><?= $prod['nombre_producto'] ?></td>
                <td><?= $prod['descripcion_producto'] ?></td>
                <td><?= $prod['categoria_producto'] ?></td>
                <td><?= $prod['precio_producto'] ?></td>
                <td><?= $prod['cantidad_producto'] ?></td>
                <td><a href="/producto/show/<?= $prod['codprod_id'] ?>">Mostrar</a>
                <a href="/producto/edit/<?= $prod['codprod_id'] ?>">Editar</a>
                <form action="/producto/delete/<?= $prod['codprod_id'] ?>" method="POST">
                <button type="submit">Eliminar</button>
                </form></td>
                
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>