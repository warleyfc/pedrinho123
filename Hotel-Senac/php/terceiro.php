<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terceiro</title>
</head>
<body>
    <?php
    $a=10; $b=7;  $c=3;
    // a>b>c
    if($a>$b and $b>$c){ 
        echo "a é maior que b e maior que c <br>";
        echo " $a <br> $b <br> $c<br>";
    }
    // a>c>b
    elseif($a>$c and $c>$b){
        echo "a é maior que c e maior que b <br>";
        echo "$a <br> $c <br> $b<br>";
    }
    // b>a>c
    elseif($b>$a and $a>$c){
        echo "b é maior que a e maior que c <br>";
        echo "$b <br> $a <br> $c<br>";
    }
    // b>c>a
    elseif($b>$c and $c>$a){
        echo "b é maior que  a e maior que c <br>";
        echo "$b <br> $c <br> $a<br>";
    }
    //c>b>a
    elseif($c>$b and $b>$a){
        echo "C é maior que b e maior que a <br>";
        echo "$c <br> $b <br> $a<br>";
    }
    //c>a>b
    else{
        echo "c é maior que a e maior que b <br>";
        echo "$c <br> $a <br> $b<br>";
    }
    ?> 
</body>
</html>