<!--COMITADO POR JOSE-->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $responsavel = $_POST["responsavel"];
    $empresa = $_POST["empresa"];
    $projeto = $_POST["projeto"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $prazo = $_POST["prazo"];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitaçao De Projeto</title>
    <link rel="stylesheet" href="css/orcamento.css">
</head>

<body>

    <header>
        <div class="Nav-bar">
            <img src="imgHtml/Gemini_Generated_Image_5kpxl15kpxl15kpx-removebg-preview.png" alt="">
            <a href="../index.php">INICIO</a>
            <a href="orcamentos.php">ORÇAMENTO</a>
            <a href="../financiero.php">FINANCEIRO</a>
            <a href="../juridico.php">JURIDICO</a>
            <a href="../projetos.php">PROJETOS</a>
            <a href="../desenvolivmento.php">DESENVOLVIMENTO</a>
        </div><!--Nav-bar-->
    </header>

    <!--solicitacion de projecto-->

    <main>
        <section class="solicitacao">
            <div class="text">
                <h1>Solicitaçao De Projeto</h1>
                <h2>Preencha o formulario para <br> a Solicitaçao do Projeto</h2>
                <h4>(*)obrigatorio</h4>
            </div>
            <div class="form">
                <form action="" method="POST">
                    



                </form>
            </div>
        </section> <!--solicitacao-->

        <section class="solicitacoes">
            <h2>SOLICITAÇOES ENVIADAS:
                <div class="solicitadas">

                </div>
            </h2>
        </section>
    </main>


</body>

</html>



<label for="empresa">Empresa*</label>
<input type="text" class="inputs" name="empresa" required>

<label for="responsavel">Responsavel*</label>
<input type="text" class="inputs" name="responsavel" required>

<label for="telefone">Numero de Telefone</label>
<input type="tel" class="inputs" name="telefone" required>

<label for="email">Email*</label>
<input type="email" class="inputs" name="email" required>

<label for="prazo">Prazo/Deadline</label>
<input type="text" class="inputs" name="prazo" required>

<label for="projeto">Descriçao do Projeto</label>
<textarea name="projeto" id="Projeto" class="pedido" required></textarea>
<button type="submit" class="form-button">ENVIAR</button>