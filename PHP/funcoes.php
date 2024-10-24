<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    function cabecalho(): void{
        echo"Programa de teste de funções<br>";
    }
    function quadrado($n): float|int{
        return($n*$n);
    }
    function soma($n1,$n2): mixed{
        return($n1+$n2);
    }
    ?>
</head>
<body>
    <?php
    $x=4;
    $resQuadrado= quadrado(n: $x);
    $resSoma= soma(n1: $x,n2:$x);
    cabecalho();
    echo "O quadrado de $x = $resQuadrado <br>";
    echo "A soma de $x + $x = $resSoma <br>"
    ?>
</body>
</html>