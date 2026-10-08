<?php
require_once "helpdesk-func.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $setor = $_POST["setor"];
    $equipamento = $_POST["equipamento"];
    $descricao = $_POST["descricao"];
    $prioridade = $_POST["prioridade"];

    $novoChamado = [
        "nome" => $nome,
        "setor" => $setor,
        "equipamento" => $equipamento,
        "descricao" => $descricao,
        "prioridade" => $prioridade,

    ];
    //ler abrir o arquivo json
    $conteudoJson = file_get_contents(__DIR__ . "../dados/chamados.json");

    //json to array php
    $chamados = json_decode($conteudoJson, true);

    //adicionar chamado
    $chamados[] = $novoChamado;

    //array php to json
    $jsonAtualizado = json_encode(
        $chamados,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    //salvar json
    file_put_contents(__DIR__ . "../dados/chamados.json", $jsonAtualizado);
}

$conteudoJson = file_get_contents(__DIR__ . "../dados/chamados.json");
$chamados = json_decode($conteudoJson, true);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>helpdesk</title>
</head>

<header>
    <div class="logo">
        <h2>José <span>Oropesa</span></h2>
    </div>
    <nav>
        <a href="../index.php">Inicio</a>
        <a href="../index.php#sobre">Sobre</a>
        <a href="../index.php#projetos">Projetos</a>
        <a href="../index.php#contato">Contato</a>
    </nav>
</header>

<body>
    <main>
    <!--CREATE-->
    <section class="formulario">
        <h2>FORMULARIO</h2>
        <form method="post">
            <label>NOME DO FUNCIONARIO</label>
            <input type="text" name="nome">
            <label>SETOR DA EMPRESA</label>
            <input type="text" name="setor">
            <label>EQUIPAMENTO AFETADO</label>
            <input type="text" name="equipamento">
            <textarea name="descricao"></textarea>
            <label>PRIORIDADE</label>
            <input type="text" name="prioridade">
            <button type="submit">ENVIAR</button>
        </form>
    </section>
    <!--READ-->
    <section class="formulario">

    </section>
    <!--UPDATE-->
    <section class="formulario">

    </section>
    <!--DELETE-->
    <section class="formulario">

    </section>
    <!--END-->
    </main>
</body>

</html>