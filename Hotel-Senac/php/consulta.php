<?php
$servername="localhost";
$username="Luciano";
$password="Senac@2024";
$dbname="hotel";
$conexao=new mysqli($servername,$username,$password,$dbname);
$sql = "SELECT * FROM reservas";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
  while ($linha = $resultado->fetch_assoc()) {
    echo "ID: " . $linha["id"] . " - Nome: " . $linha["nome"] . "<br>";
  }
} else {
  echo "Nenhum resultado encontrado.";
}
$conexao->close();

