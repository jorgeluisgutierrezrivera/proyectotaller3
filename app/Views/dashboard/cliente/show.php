<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$cliente['nombre_cliente']?></title>
</head>
<body>
                <h1><?= $cliente['cicli_id'] ?></h1>
                <h1><?= $cliente['nombre_cliente'] ?></h1>
                <h1><?= $cliente['apellido_cliente'] ?></h1>
                <p><?= $cliente['direccion_cliente'] ?></p>
                <p><?= $cliente['celular_cliente'] ?></p>
                <p><?= $cliente['correo_cliente'] ?></´p>
</body>
</html>