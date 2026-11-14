<?php

require_once "../conexao.php";

//1cadastrar
if (isset($_POST["cadastrar"])) {
    $nome = $_POST["nome"];
    $categoria_id = $_POST["categoria_id"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];
    $estoque_minimo = $_POST["estoque_minimo"];

    $sql = "INSERT INTO produtos (nome, categoria_id, preco, quantidade, estoque_minimo) VALUES ('$nome', $categoria_id, $preco, $quantidade, $estoque_minimo)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}

//2actualizar produto
if (isset($_POST["atualizar"])) {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $categoria_id = $_POST["categoria_id"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];
    $estoque_minimo = $_POST["estoque_minimo"];
    
    $sql = "UPDATE produtos SET nome = '$nome', categoria_id = $categoria_id, preco = $preco, quantidade = $quantidade, estoque_minimo = $estoque_minimo WHERE id = $id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}

//3excluir
if (isset($_POST["excluir"])) {
    $id = $_POST["id"];
    $sql = "DELETE FROM produtos WHERE id = $id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}

//4buscarProdutoParaEdiçao
$produtoEditar = null;
if (isset($_GET["editar"])) {
    $id = $_GET["editar"];
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $stmt = $pdo->prepare($sql); 
    $stmt->execute();
    $produtoEditar = $stmt->fetch(PDO::FETCH_ASSOC);
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUTOS</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
<nav>
    <a href="listagem.php"></a>
    <a href="cadastro.php"></a>
</nav>
</header>

<body>
<form method="POST">
        <?php if ($produtoEditar) { ?>
            <input type="hidden" name="id" value="<?= $produtoEditar['id'] ?>">
        <?php } ?>
        <label>Nome do Produto:</label>
        <input type="text" name="nome" required value="<?= $produtoEditar['nome'] ?? '' ?>">
        <label>Categoria_id</label>
        <input type="number" min="1" name="categoria_id" required value="<?= $produtoEditar['categoria_id'] ?? '' ?>">
        <br><br>
        <label>Preço:</label>
        <input type="number" name="preco" step="0.01" min="1" required value="<?= $produtoEditar['preco'] ?? '' ?>">
        <label>Quantidade Disponivel:</label>
        <input type="number" name="quantidade" min="0" required value="<?= $produtoEditar['quantidade'] ?? '' ?>">
        <br><br>
        <label>Quantidade Minima Em Estoque</label>
        <input type="number" name="estoque_minimo" min="1" required value="<?= $produtoEditar['estoque_minimo'] ?? '' ?>">
        <?php if ($produtoEditar) { ?>
            <button type="submit" name="atualizar">Atualizar Produto</button>
        <?php } else { ?>
            <button type="submit" name="cadastrar" class="cadastrarbuton">Cadastrar Produto</button>
        <?php } ?>
    </form>

</body>

</html>