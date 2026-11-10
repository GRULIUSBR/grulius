<?php

//php executa regras do sistema
//mysql sgbd
//PDO interface do php q permite conversar com o banco de dados por meio de um driver
//host = 'localhost'

$host = 'localhost';
$db = 'jose755';
$user = 'jose755';
$pass = '755!@#';
$charset = 'utf8mb4';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charst=$charset",
        $user,
        $pass
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    echo "SUCESSO AO CONECTAR AO BANCO DE DADO";
} catch (PDOException $e) {
    echo "ERRO AO CONECTAR AO BANCO DE DADOS.\n";
    echo $e->getMessage();
}
