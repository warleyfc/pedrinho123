<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Os dados informados são</h1>
    <?php
    $nome=$_POST["nome"];
    $cpf=$_POST["cpf"];
    $endereco=$_POST["endereco"];
    $estado=$_POST["listaEstado"];
    $sexo=$_POST["sexo"];
    $dataNascimento=$_POST["data"];
    $cinema=isset($_POST["checkCinema"]);
    $musica=isset($_POST["checkMusica"]);
    $informatica=isset($_POST["checkInformatica"]);
    $login=$_POST["login"];
    $senha1=$_POST["senha1"];
    $senha2=$_POST["senha2"];
    $foto=$_FILES["foto"];

    $checagem=true;
    if($nome==""){
        echo"INFORME SEU NOME.<br>";
        $checagem=false;
    }
    if($endereco==""){
        echo"INFORME SEU ENDERECO.<br>";
        $checagem=false;
    }
    if($senha1 != $senha2){
        echo"SENHA INVALIDA.<br>";
        $checagem=false;
    }
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        echo "CPF Inválido.<br>";
        $checagem=False;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        echo "CPF Inválido.<br>";
        $checagem=false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            echo "CPF Inválido.<br>";
            $checagem=False;
        }
    }
    $validaIdade=new DateTime($dataNascimento);
    $hoje=new DateTime();
    $idade=$hoje->diff($validaIdade)->y;
    if($idade<8){
        echo "Você precisa ter pelo menos 18 anos para se cadastrar.<br>";
    }


    

    if($foto["error"]!=0){
        echo "Erro no subir da imagem.<br>";
        $checagem=false;
    }
    if($foto['size']==0){
        echo "Erro no tamanho da imagem.<br>";
        $checagem=false;
    }
    if($foto["size"]>5242880){
        echo "Tamanho do arquivo ultrapassa o permitido.<br>";
        $checagem=false;
    }
    if($foto['type']!="image/gif" && $foto['type']!="image/jpeg" && $foto['type']!="image/pjeg" && $foto['type']!="image/x-png" 
    && $foto['type']!="image/bmp" && $foto['type']!="image/webp" && $foto['type']!="image/svg" && $foto['type']!="image/png"){
        echo "Tipo de arquivo não permitido.<br>";
        $checagem=false;
    }
    if ($checagem) {
        $destino = "C:/xampp/htdocs/Upload/$nome" . basename($foto['name']);
        if (move_uploaded_file($foto['tmp_name'], $destino)) {
            echo "Arquivo enviado com sucesso!<br>";
            $img= $nome.basename($foto['name']);
            echo "<img src='/upload/$img'/>";

        } else {
            echo "Erro ao copiar o arquivo para o destino.<br>";
        }
      }
    ?>

</body>
</html>