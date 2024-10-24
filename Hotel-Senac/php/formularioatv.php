<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Dados Recebidos</h1>
    Olá 
    <?php
    echo $_POST['nome'];
    ?>
    !<br>
    Seu e-mail é: <br>
    <?php
    echo $_POST['email']; 
    ?>
    <br>
    Website:
    <?php
    echo $_POST['website']; 
    ?>
    <br>
    Comentário:
    <?php
    echo $_POST['comentario']; 
    ?>
</body>
</html>