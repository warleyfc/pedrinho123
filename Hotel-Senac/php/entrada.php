<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saída de dados</title>
</head>
<body>
    <h1>Dados Recebidos</h1>
    Olá 
    <?php
    echo $_POST['nome'];
    ?>
    !<br>
    Você nasceu em 
    <?php
    echo $_POST['mes'];
    ?> 
</body>
</html>