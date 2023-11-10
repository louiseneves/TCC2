<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'louise28';
$dbName = 'farma';
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conexao->error) {
    die("Falha ao conectar ao banco de dados: " . $conexao->error);
}
