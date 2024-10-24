<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
<body>
    <?php
    $estados = array(
        0 => "Parado",
        1 => "Rodando",
        2 => "Finalizado",
        "ES" => "Espírito Santo",
        "RJ" => "Rio de Janeiro",
        "MG" => "Minas Gerais",
    );
    echo "<pre>";
    print_r(value: $estados);
    echo "</pre>";
    ?>
</body>
 
</html>
tem menu de contexto