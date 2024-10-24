<?php
$servername="localhost";
$username="Luciano";
$password="Senac@2024";
$dbname="hotel";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("FALHA NA CONEXÃO".$conn->connect_error);
}
else{
    echo"CONECTADO";
}