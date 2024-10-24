<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo do echo</title>
</head>
<body>
    <?php
    echo "<h1> Página de teste do ECHO</h1>";
    echo "<p> Parágrafo em HTML</p>";
    echo "Mensagem solta em verde. <br>";
    $frase ="Exemplo de variável String";
    echo "$frase";
    $a=10;
    $b=20;
    $soma;
    $soma=$a+$b;
    echo"<br> $soma";
    $hoje = date('d/m/Y');
    echo"<br>$hoje";
    ?>
</body>
</html>