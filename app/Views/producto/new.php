<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
</head>
<body>
    <form action="/producto/create" method="POST">
        
        <?= view('producto/_form', ['op' =>'Crear'])?>
    </form>
</body>
</html>