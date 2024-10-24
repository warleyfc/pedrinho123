<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $estado["AP"]="Amapá";
    $estado["AM"]="Amazonas";
    $estado["BA"]="Bahia";
    $estado["CE"]="Ceará";
    $estado["ES"]="Espírito Santo";
    $estado["GO"]="Goiás";
    $estado["MA"]="Maranhão"; 
    $estado["MT"]="Mato Grosso"; 
    $estado["MS"]="Mato Grosso do Sul";
    $estado["MG"]="Minas Gerais";
    $estado["PA"]="Pará";
    $estado["PB"]="Paraíba";
    $estado["PR"]="Paraná";
    $estado["PE"]="Pernambuco";
    $estado["PI"]="Piauí"; 
    $estado["RJ"]="Rio de Janeiro";
    $estado["RN"]="Rio Grande do Norte";
    $estado["RS"]="Rio Grande do Sul ";
    $estado["RO"]="Rondônia";
    $estado["RR"]="Roraima";
    $estado["SC"]="Santa Catarina";
    $estado["SP"]="São Paulo";
    $estado["SE"]="Sergipe"; 
    $estado["TO"]="Tocantins"; 
    $estado["DF"]="Distrito Federal";
    echo "<pre>";
    print_r($estado);
    echo"</pre>";
    /* No PHP o "foreach" é uma estrutura de controle que irá percorrer os elementos do array de maneira simples, O 'as' dentro do 'foreach' usado para associar cada elemento a uma variável temporária"*/
    foreach ($estado as $sigla => $nome) {
        $tamanho = strlen($nome);// tamanho do nome de cada estado
        echo "O tamanho do nome do estado $nome ($sigla) é $tamanho caracteres.<br>";
    }
    ?>
</body>
</html>