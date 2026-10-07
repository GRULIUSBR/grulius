<?php
// o formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $categoria = $_POST["categoria"];
    $marca = $_POST["marca"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];
    // fabricante
    $fabricanteNome = $_POST["fabricanteNome"];
    $pais = $_POST["pais"];
    //valor no estoque

    $novoCadastro = [
        "nome" => $nome,
        "categoria" => $categoria,
        "marca" => $marca,
        "preco" => $preco,
        "quantidade" => $quantidade,
        "fabricante" => [
            "fabricanteNome" => $fabricanteNome,
            "pais" => $pais
        ]
    ];

    //abrir-ler arquivo
    $conteudoJson = file_get_contents(__DIR__ . "/dados/22-cadastro.json");
    $cadastros = json_decode($conteudoJson, true);

    //adicionar cadastro
    $cadastros[] = $novoCadastro;

    //array php -> json
    $jsonAtualizado = json_encode(
        $cadastros,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    //salvando en .json
    file_put_contents(__DIR__ . "/dados/22-cadastro.json", $jsonAtualizado);

    //lee el archivo json
    $conteudoJson = file_get_contents(__DIR__ . "/dados/22-cadastro.json");
    $cadastros = json_decode($conteudoJson, true);
}

$conteudoJson = file_get_contents(__DIR__ . "/dados/22-cadastro.json");
$cadastros = json_decode($conteudoJson, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>22-CadastroProdutos-PHP-JSON</title>
    <link rel="stylesheet" href="/css/03-cadastro-produtos.css">
</head>

<body>
    <main>

        <!--CADASTRAR-->

        <section class="intro-form">
            <div class="intro">
                <h2>FORMULARIO DE CADASTRO</h2>
            </div>
            <div class="formulario">
                <form method="POST">
                    <div class="card-container">
                        <div class="form-card">
                            <label>NOME:</label>
                            <input type="text" name="nome" class="boxes">
                            <label>CATEGORIA:</label>
                            <input type="text" name="categoria" class="boxes">
                            <label>MARCA</label>
                            <input type="text" name="marca" class="boxes">
                        </div>
                        <div class="form-card">
                            <label>PREÇO</label>
                            <input type="number" name="preco" step="0.1" class="boxes">
                            <label>QUANTIDADE</label>
                            <input type="number" name="quantidade" class="boxes">
                            <label>NOME DO FABRICANTE</label>
                            <input type="text" name="fabricanteNome" class="boxes">
                            <label>PAIS</label>
                            <input type="text" name="pais" class="boxes">
                        </div>
                    </div>

                    <button type="submit" class="boton">FINALIZAR CADASTRO</button>
                </form>
            </div>
        </section> <!--introform section-->

        <!--CADASTRADOS-->

        <section class="cadastrados">
            <div class="intro-cadastrados">
                <h1>PRODUTOS CADASTRADOS</h1>
            </div>
            <div class="cards">
                <?php foreach ($cadastros as $cadastro) {  ?>
                    <div class="card-produto">
                        <h2>PRODUTO:</h2>
                        <h2> <?= $cadastro["nome"] ?> </h2>
                        <p> <?= $cadastro["categoria"] ?> </p>
                        <p> <?= $cadastro["marca"] ?> </p>
                        <p> <?= $cadastro["preco"] ?> </p>
                        <p> <?= $cadastro["quantidade"] ?> </p>
                        <h3>FABRICANTE:</h3>
                        <p> <?= $cadastro["fabricante"]["fabricanteNome"] ?> </p>
                        <p> <?= $cadastro["fabricante"]["pais"] ?> </p>
                        <h3> VALOR NO ESTOQUE: </h3>
                        <p> <?= (float)$cadastro["preco"] * (int)$cadastro["quantidade"] ?> </p>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
    <footer>
        <p>
            DESENVOLVIDO POR <a href="https://jose755.devlook.xyz">JOSE OROPESA</a>
        </p>
        <p>
            HTML + CSS + PHP + JSON
        </p>
    </footer>
</body>

</html>