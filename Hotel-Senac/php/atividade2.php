<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <?php
    for($i=1;$i<=20;$i++){
        if($i%5==0 && $i%3==0){
            echo "<b><i>$i</i></b><br>";
        }
        elseif($i%3==0){
            echo "<b>$i</b><br>";
        }
        elseif($i%5==0){
            echo "<i>$i</i><br>";
        }
        else
            echo "$i <br>";
    }
    ?>
</body>
</html>