<?php
$age=$_POST["age"];
$name=$_POST["name"];

if($age >= 18){
    $situation = "ADULT: ACCESS ALLOWED";
}
else{
    $situation = "ACCESS DENIED";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="age.css">
    <title>Idade</title>
</head>

<header>
    <div class="logo">
        <h2>Jose <span>Oropesa</span> </h2>
    </div>
    <nav>
        <a href="#inicio">Inicio</a>
        <a href="#sobre">Sobre</a>
        <a href="#projeto">Projeto</a>
        <a href="#contato">Contato</a>
    </nav>
</header>

    <body>
        <main>
            <section>
    <form method="POST">
    <label>NAME:</label>
    <input type="text" class="name" id="name" name="name">
    <br> <br>
    <label>AGE:</label>
    <input type="number" class="age" id="age" name="age">
    <br> <br>
    <h2> AGE <?= $age ?> </h2>
    <h3> SITUATION <?= $situation ?> </h3>
    <br>
    <button type="submit">CADASTRAR</button>
</form>
            </section>
        </main>  
    </body>
</html>