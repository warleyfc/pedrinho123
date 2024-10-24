<?php
include("conexaohotel.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $data=$_POST['data'];
    $hora=$_POST['hora'];
    $servico=$_POST['servico'];
}

$stmt=$conn->prepare("INSERT INTO reservas (nome,email,data_reserva,hora_reserva,servico) values(?,?,?,?,?)");
$stmt->bind_param("sssss",$nome,$email,$data,$hora,$servico);

if($stmt->execute()){
    echo "<h2>Reserva realizada com sucesso</h2>";
}
else{
    echo"ERROR: ".$stmt->error;
}

$stmt->close();

/*MY SQL 
create database hotel;
use hotel;
CREATE TABLE reservas (
    id CHAR(36) PRIMARY KEY NOT NULL DEFAULT UUID(),
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    data_reserva DATE NOT NULL,
    hora_reserva TIME NOT NULL,
    servico VARCHAR(100) NOT NULL
);
*/