<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Piggies</title>
</head>
<body>

    <?= view('partials/_session')?>
    <h1><?= $this->renderSection('header') ?></h1>
    <?= $this->renderSection('contenido') ?>

    
</body>
</html>