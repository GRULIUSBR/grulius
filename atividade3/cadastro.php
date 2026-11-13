<?php 

if (isset($_POST["cadastrar"])) {
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    echo "debug3";

    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES ('$nome', $preco, $quantidade)";

    echo "debug4";

    $stmt = $pdo->prepare($sql);

    echo "debug5";

    $stmt->execute();

    echo "debug6";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUTOS</title>
</head>
<body>
    <form action=""></form>
    
</body>
</html>