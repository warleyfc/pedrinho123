<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo "I = <b>$i</b> <br>"; 
        } else {
            echo "I = <i>$i</i> <br>";  
        }
    }
?>
</body>
</html>