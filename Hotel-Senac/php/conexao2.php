<?php
$host = "localhost";
$dbname = "seu_banco_de_dados";
$username = "Luciano";
$password = "Senac@2024";
try {
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //CAptura o erro permitido demostra-lo no bloco cath
    echo "Conexão realizada";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

