<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    <?php
    date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário
    $hora = date('h:i:s'); // Pega a hora atual do sistema
    // h- hora i-minutos s-segundos
    $date=date('d/m/y');
    //date- dia m-mes y-ano
    if ($hora >= 0 && $hora < 12) {
        echo "<p style='color: red;'>BOM DIA <br>Hoje é : $date</p>";
        echo "Hora: $hora";
    } elseif ($hora >= 12 && $hora < 18) {
        echo "<p style='color: green;'>BOA TARDE<br>Hoje é : $date</p>";
        echo "Hora: $hora";
    } else {
        echo "<p style='color: blue;'>BOA NOITE<br>Hoje é : $date</p>";
        echo "Hora: $hora";
        //Adicionei para imprimir a data e hora atual
    }
    ?>
</body>
</html>