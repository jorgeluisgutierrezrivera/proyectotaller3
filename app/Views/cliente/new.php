<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
</head>
<body>
    <form action="/cliente/create" method="POST">
        <label for="cicli_id">Cédula de Identidad:</label>
        <?= view('cliente/_form', ['op' =>'Crear'])?>
    </form>
</body>
</html>