<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$producto['nombre_producto']?></title>
</head>
<body>
                <h1><?= $producto['codprod_id'] ?></h1>
                <h1><?= $producto['nombre_producto'] ?></h1>
                <h1><?= $producto['descripcion_producto'] ?></h1>
                <p><?= $producto['categoria_producto'] ?></p>
                <p><?= $producto['precio_producto'] ?></p>
                <p><?= $producto['cantidad_producto'] ?></´p>
</body>
</html>