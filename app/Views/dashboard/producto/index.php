<?= $this->extend('Layouts/dashboard')?>
<?= $this->section('header')?>
    Listado de Productos
<?= $this->endSection()?>
<?= $this->section('contenido')?>
    <td><a href="/dashboard/producto/new">Añadir Producto</a></td>

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
                <td><?= $prod->codprod_id ?></td>
                <td><?= $prod->nombre_producto ?></td>
                <td><?= $prod->descripcion_producto ?></td>
                <td><?= $prod->categoria_producto ?></td>
                <td><?= $prod->precio_producto ?></td>
                <td><?= $prod->cantidad_producto ?></td>
                <td><a href="/dashboard/producto/show/<?= $prod->codprod_id ?>">Mostrar</a>
                <a href="/dashboard/producto/edit/<?= $prod->codprod_id ?>">Editar</a>
                <form action="/dashboard/producto/delete/<?= $prod->codprod_id ?>" method="POST">
                <button type="submit">Eliminar</button>
                </form></td>
                
            </tr>
        <?php endforeach ?>
    </table>
    <?= $this->endSection()?>