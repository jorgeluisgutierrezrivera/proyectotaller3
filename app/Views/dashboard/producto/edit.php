<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
</head>
<body>
<?= view('partials/_session')?>
    <form action="/dashboard/producto/update/<?=$producto['codprod_id'] ?>" method="POST">
        <?= view('dashboard/producto/_form', ['op' =>'Actualizar'])?>
    </form>
</body>
</html>