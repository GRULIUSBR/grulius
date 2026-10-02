<?php

//if verifica se o formulario foi enviado usando o metodo post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    // recebe as notas de prtgs
    $portugues_prova1 = $_POST["portugues_prova1"];
    $portugues_prova2 = $_POST["portugues_prova2"];
    $portugues_prova3 = $_POST["portugues_prova3"];

    // recebe as notas de matematica
    $matematica_prova1 = $_POST["matematica_prova1"];
    $matematica_prova2 = $_POST["matematica_prova2"];
    $matematica_prova3 = $_POST["matematica_prova3"];

    // recebe as notas de historia
    $historia_prova1 = $_POST["historia_prova1"];
    $historia_prova2 = $_POST["historia_prova2"];
    $historia_prova3 = $_POST["historia_prova3"];

    $novoAluno = [
        "nome" => $nome,
        "idade" => $idade,
        "notas" => [
            "portugues" => [
                "prova1" => $portugues_prova1,
                "prova2" => $portugues_prova2,
                "prova3" => $portugues_prova3,
            ],

            "matematica" => [
                "prova1" => $matematica_prova1,
                "prova2" => $matematica_prova2,
                "prova3" => $matematica_prova3,
            ],

            "historia" => [
                "prova1" => $historia_prova1,
                "prova2" => $historia_prova2,
                "prova3" => $historia_prova3,
            ]

        ]
    ];

    echo "<h2>DADOS RECEBIDOS</h2>";
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade .
        "<br><br>";

    echo "<strong>Portugues:</strong><br>";
    echo "Prova 1: " . $portugues_prova1 . "<br>";
    echo "Prova 2: " . $portugues_prova2 . "<br>";
    echo "Prova 3: " . $portugues_prova3 .
        "<br><br>";

    echo "<strong>Matematica:</strong><br>";
    echo "Prova 1: " . $matematica_prova1 . "<br>";
    echo "Prova 2: " . $matematica_prova2 . "<br>";
    echo "Prova 3: " . $matematica_prova3 .
        "<br><br>";

    echo "<strong>Historia:</strong><br>";
    echo "Prova 1: " . $historia_prova1 . "<br>";
    echo "Prova 2: " . $historia_prova2 . "<br>";
    echo "Prova 3: " . $historia_prova3 .
        "<br><br>";
}







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados-json</title>
    <link rel="stylesheet" href="/activities/styles/02-persist-dados.css">
</head>

<body>
    <h1>CADASTRO DE NOTAS</h1>
    <form method="POST">
        <label">Nome:</label>
            <input type="text" name="nome" required>
            <br><br>
            <label">Idade:</label>
                <input type="number" name="idade" required>
                <!--port-->
                <h2>Portugues</h2>
                <label>Prova: 1</label>
                <input type="number" name="portugues_prova1" min="0" max="0" step="0.1" required>
                <br><br>
                <label>Prova: 2</label>
                <input type="number" name="portugues_prova2" min="0" max="0" step="0.1" required>
                <br><br>
                <label>Prova: 3</label>
                <input type="number" name="portugues_prova3" min="0" max="0" step="0.1" required>
                <br><br>
                <!--mate-->
                <h2>Matematica</h2>
                <label>Prova: 1</label>
                <input type="number" name="matematica_prova1" min="0" max="0" step="0.1" required>
                <br><br>
                <label>Prova: 2</label>
                <input type="number" name="matematica_prova2" min="0" max="0" step="0.1" required>
                <br><br>
                <label>Prova: 3</label>
                <input type="number" name="matematica_prova3" min="0" max="0" step="0.1" required>
                <br><br>
                <!--historia-->
                <h2>Historia</h2>
                <label>Prova: 1</label>
                <input type="number" name="historia_prova1" min="0" max="0" step="0.1" required>
                <br><br>
                <label>Prova: 2</label>
                <input type="number" name="historia_prova2" min="0" max="0" step="0.1" required>
                <br><br>
                <label>Prova: 3</label>
                <input type="number" name="historia_prova3" min="0" max="0" step="0.1" required>
                <br><br>
                <button class="boton">ENVIAR FORMULARIO</button>
    </form>
</body>

</html>