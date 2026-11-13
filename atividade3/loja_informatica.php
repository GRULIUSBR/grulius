<?php

require_once "../conexao.php";

$sql = "CREATE TABLE IF NOT EXISTS categorias (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL)";
$pdo->exec($sql);

//cria as categorias basicas da loja :-)
$stmt = $pdo->query("SELECT COUNT(*) FROM categorias");
$totalCategorias = $stmt->fetchColumn();


if ($totalCategorias == 0) {
$sql = "INSERT INTO categorias (nome) VALUES
('software'),
('acessorios'),
('jogos'),
('celulares'),
('hardware')";
$pdo->exec($sql);
}

//8888888888888888888888888888888888888888888888888888888

$sql = "CREATE TABLE IF NOT EXISTS produtos (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(150) NOT NULL,
categoria_id INT,
preco DECIMAL(10,2) NOT NULL,
quantidade INT NOT NULL,
estoque_minimo INT NOT NULL,
FOREIGN KEY (categoria_id) REFERENCES categorias(id))";
$pdo->exec($sql);

//cadastrar produtos pela primeira vez :-(
$stmt = $pdo->query("SELECT COUNT(*) FROM produtos");
$totalProdutos = $stmt->fetchColumn();

if ($totalProdutos == 0) {
$sql = "INSERT INTO produtos (nome, categoria_id, preco, quantidade, estoque_minimo) VALUES
('windows7', 1, 100, 50, 5),
('windows10pro', 1, 125, 50, 5),
('pelicula_de_s10e', 2, 65, 50, 3),
('capa_de_iphone_14_pro', 2, 50, 10, 1),
('THE_ELDER_SCROLL_IV_OBLIVION', 3, 25, 30, 5),
('GTA_VI', 3, 1250, 30, 5),
('IPHONE_14_PRO', 4, 5500, 20, 5),
('SAMSUNG_GALAXY_J3', 4, 600, 45, 5),
('NVIDIA_5090', 5, 83000, 3, 1),
('MONITOR_SAMSUNG_ESSENTIAL_S3', 5, 899, 11, 2)";
$pdo->exec($sql);
}

//8888888888888888888888888888888888888888888888888888888

$sql = "CREATE TABLE IF NOT EXISTS vendas (
id INT PRIMARY KEY AUTO_INCREMENT,
produto_id INT,
quantidade INT NOT NULL,
valor_total DECIMAL(10,2) NOT NULL,
data_venda DATETIME NOT NULL,
FOREIGN KEY (produto_id) REFERENCES produtos(id))";
$pdo->exec($sql);


?>
