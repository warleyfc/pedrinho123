<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function validarData($data, $formato = 'Y-m-d') {
    $d = DateTime::createFromFormat($formato, $data);
    return $d && $d->format($formato) === $data;
}

// Exemplo de uso
$data = '2023-01-07';
if (validarData($data)) {
    echo "Data válida!";
} else {
    echo "Data inválida!";
}
?>
</body>
</html>