<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    mysqli_connect("127.0.0.1","hiago","Th221507") or die("Não foi possível conectar ao BANCO DE DADOS.".mysqli_connect_error());
    mysqli_select_db("ProgWebBD") or die("Não foi possível encontrar o banco".mysqli_connect_error());
    ?>
</body>
</html>