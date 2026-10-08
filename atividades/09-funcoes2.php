<?php
require_once "08-funcoes.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    $media = calcularMedia($nota1, $nota2);
    $situacao = verificarStatus($media);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNÇOES NO FRONT</title>
</head>

<body>
    <h1> <?= $nomeEscola ?> </h1>
    <h2> <?= saudacao() ?> </h2>
    <p> <?= cumprimentar("Jose") ?> </p>
    <p> RESULTADO DA SOMA:
        <?= somar(10, 5) ?>
    </p>

    <div class="media">
        <form method="post">
            <label>PRIMER NUMERO:</label>
            <input type="number" name="nota1" step="0.1" min="0" max="10">
            <label>SEGUNDO NUMERO:</label>
            <input type="number" name="nota2" step="0.2" min="0" max="10">
            <button type="submit">CALCULAR MEDIA</button>
        </form>
    </div>
    <h2>
        MEDIA:
        <?= $media ?>
    </h2>
    <h3>
        SITUAÇAO:
        <?= $situacao ?>
    </h3>
</body>

</html>