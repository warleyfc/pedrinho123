<?php
$host = "localhost";
$dbname = "seu_banco_de_dados";
$username = "Luciano";
$password = "Senac@2024";
try{
// Conexão com o banco de dados usando PDO
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//inserindo dados
$nome="Pedro Pê";
$email="pedro.pe@exemplo.com";
$senha=password_hash("hiagoteamo",PASSWORD_DEFAULT);
//HASH DE SENHA *(Criptografando os esquemas)*
$sql="INSERT INTO usuario (nome,email,senha) VALUES (:nome,:email,:senha)";
$stmt=$pdo->prepare($sql);
//Preparação da instrução para ser executada de forma segura ... ****Prevenção contra SQL INJECTION***
//Estabelecendo ligação 
$stmt->bindParam(":nome",$nome);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":senha",$senha);

//executando essa bagaça
$stmt->execute();
echo "Usuário inserido com sucesso!!!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
