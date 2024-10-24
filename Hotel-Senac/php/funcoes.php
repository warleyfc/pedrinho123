<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
    <?php
    function cabecalho(){
        echo "Programa de teste de funções<br>";    
    }
    function quadrado($n){
        return($n*$n); 
    }
    function soma($n1,$n2){
        return ($n1+$n2);
    }
    ?>
</head>
<body>
    <?php
    $x=4;
    $resQuadrado= quadrado($x);
    $resSoma= soma($x,$x);
    cabecalho();
    echo "O quadrado de $x = $resQuadrado <br>";
    echo "A soma de $x + $x = $resSoma <br>";
    ?>
</body>
</html>