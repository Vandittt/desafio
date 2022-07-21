<?php

$host = "localhost";
$dbname = "desafio_php";
$user = "root";
$pass = "";

try{

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



} catch(PDOExeception $e) {

    $error = $e->getMessage();
    echo "Erro: $error";
}