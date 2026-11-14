<?php
require_once "../conexao.php";

//listartodososprodutos
$sql = "SELECT * FROM produtos ORDER BY id ASC";
$stmt = $pdo->query($sql);
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem De Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
<nav>
    <a href="listagem.php"></a>
    <a href="cadastro.php"></a>
</nav>
</header>

<body>

    <h1>LISTA DE PRODUTOS</h1>

    <table>
        <!-- tr table row crea una linea dentro de la tabla -->
        <tr>
            <!-- th table header crea una celula de cabeçalho en la tabla -->
            <th>ID</th>
            <th>nome</th>
            <th>categoria</th>
            <th>preco</th>
            <th>quantidade</th>
            <th>quantidadeMin</th>

        </tr>
        <?php foreach ($produtos as $produto) { ?>
            <tr>
                <!-- td table data crea una celula de datos en la tabla -->
                <td> <?= $produto["id"] ?> </td>
                <td> <?= htmlspecialchars($produto["nome"]) ?> </td>
                <td> <?= $produto["categoria"] ?> </td>
                <td>R$ <?= number_format($produto["preco"], 2, ",", ".") ?> </td>
                <td> <?= $produto["quantidade"] ?> </td>
                <td> <?= $produto["quantidadeMin"] ?> </td>

                <td>
                    <!-- EDITAR -->
                    <a href="cadastro.php?editar=<?= $produto['id'] ?>">Editar</a>
                    <!-- EXCLUIR -->
                    <form method="POST" action="cadastro.php" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                        <button type="submit" name="excluir" onclick="return confirm ('Desjea excluir este produto?')">Excluir</button>
                    </form>
                </td>


            </tr>
        <?php } ?>
    </table>

</body>

</html>