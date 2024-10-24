<?php
$servername = "localhost";
$username = "Luciano";
$password = "Senac@2024";
$dbname = "seu_banco_de_dados";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
echo "Conectado com sucesso";



