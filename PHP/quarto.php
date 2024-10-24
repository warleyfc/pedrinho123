<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1=10;
        $n2=5;
        $op="+"; //Altere a opção para testar
        switch($op){
            case "+": echo "Soma=".($n1+$n2);
            break;
            case "-": echo "Subtração =".($n1-$n2);
            break;
            case "*": echo "Multiplicação =".($n1*$n2);
            break;
            case "/"; echo "Divisão =".($n1/$n2);
            break;
            default: echo "Operação invalida!";
        }
        ?>
</body>
</html>