<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    echo "<div style='color:red;'>";
    $estados[0]="Parado";
    $estados[1]="Executado";
    $estados[2]="Finalizado";
    $estados["ES"]="Espírito Santo";
    $estados["RJ"]="Rio de Janeiro";
    echo "<pre>";
    print_r($estados);
    echo"</pre>";
    echo "</div>";
    echo $estados[2] . "<br>";
    echo $estados["RJ"];
    
    echo "<pre>Este é um texto pre-formatado
    Realizando um teste
    1
    2
    3
    4
     </pre>"
    ?>
</body>
</html>