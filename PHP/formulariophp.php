<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados Recebidos do HTML</h1>
    <?php
    echo $_POST["nome"];
    ?>
    <?php
    echo $_POST["Email"];
    ?>
    <?php
    echo $_POST["Website"];
    ?>
    <?php 
    echo $_POST["Comentario"];
    ?>
</body>
</html>