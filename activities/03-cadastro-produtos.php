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
        JSON_PRETTY_PRINT
    );

    //salvando en .json
    file_put_contents(__DIR__ . "/dados/22-cadastro.json", $jsonAtualizado);
}

$conteudoJson = file_get_contents(__DIR__ . "dados/22-cadastro.json");
$cadastros = json_decode($conteudoJson, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>22-CadastroProdutos-PHP-JSON</title>
    <link rel="stylesheet" href="/activities/styles/03-cadastro-produtos.css">
</head>

<body>
    <main>

        <!--CADASTRAR-->

        <section class="intro-form">
            <div class="intro">
                <h2>FORMULARIO DE CADASTRO</h2>
            </div>
            <div class="formulario">
                <form method="$_POST">
                    <label>NOME:</label>
                    <input type="text" class="boxes">
                    <label>CATEGORIA:</label>
                    <input type="text" class="boxes">
                    <label>MARCA</label>
                    <input type="text" class="boxes">
                    <label>PREÇO</label>
                    <input type="number" class="boxes">
                    <label>QUANTIDADE</label>
                    <input type="number" class="boxes">
                    <label>NOME DO FABRICANTE</label>
                    <input type="text" class="boxes">
                    <label>PAIS</label>
                    <input type="text" class="boxes">
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
                        <h2> <?= $cadastro["nome"] ?> </h2>
                        <p> <?= $categoria["categoria"] ?> </p>
                        <p> <?= $marca["marca"] ?> </p>
                        <p> <?= $preco["preco"] ?> </p>
                        <p> <?= $quantidade["quantidade"] ?> </p>
                        <h3>FABRICANTE</h3>
                        <p> <?= $fabricanteNome["fabricanteNome"] ?> </p>
                        <p> <?= $pais["pais"] ?> </p>
                    </div>
            </div>
        <?php } ?>
        </section>
    </main>
</body>

</html>