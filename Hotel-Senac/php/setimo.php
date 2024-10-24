<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sétimo</title>
</head>
<body>
    <?php
    //Exemplo que gera a sequencia de Fibonacci
    //Um número é a soma de seus 2 antecessores
    $nc=0; //Número corrente
    $a1=1; //Número anterior 1
    $a2=1; //Numero anterior 2
    echo "1 <br> 1 <br>";
    for($i=0;$i<50;$i++){
        $nc=$a1+$a2;
        $a2=$a1;
        $a1=$nc;
        echo "$nc <br>";
    };
    ?>

</body>
</html>