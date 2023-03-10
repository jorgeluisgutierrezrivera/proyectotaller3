<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Cliente</title>
</head>
<body>

    <?= view('partials/_session')?>

    <form action="/dashboard/cliente/update/<?=$cliente['cicli_id'] ?>" method="POST">
        <?= view('dashboard/cliente/_form', ['op' =>'Actualizar'])?>
    </form>
</body>
</html>