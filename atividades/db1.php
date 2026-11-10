<?php 
//db1.php
require_once "conexao.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sistema de Cadastro de produtos</h1>
    <h2>
        <?php  
        if($produtoEditar) {
            echo "EDITAR PRODUTO";
        } else {
            echo "CADASTRAR PRODUTOS";
        }
        ?>
    </h2>

        <form method="POST">
            <?php if ($produtoEditar) { ?>
    <input type="hidden" name="id" value="<?= $produtoEditar['id'] ?>">
            <?php } ?>
            <label>Nome do Produto:</label>
            <input type="text" name="nome" value="<?= $produtoEditar['nome'] ?? '' ?>">
            <br><br>
            <label>Preço:</label>
            <input type="number" name="preco" step="0.01" min="0" required value="<?php $produtoEditar['preco'] ?? '' ?>">
            <label>Quantidade:</label>
            <input type="number" name="quantidade" min="0" required value="<?= $produtoEditar['quantidade'] ?? '' ?>">
            <br><br>
            <?php if ($produtoEditar) { ?>
            <button type="submit" name="atualizar">Atualizar Produto</button>
            <?php } else { ?>
            <button type="submit" name="cadastrar">Cadastrar Produto</button>
            <?php } ?>
        </form>
    <hr>
    <h2>Produtos Cadastrados</h2>
</body>
</html>