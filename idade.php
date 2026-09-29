<?php
$age;
$name;

if($age >= 18){
    $situation = "adult";
}
else{
    $situation = "minor";
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
        
    </div>
    <nav>
        <a href="#inicio">Inicio</a>
        <a href="#sobre">Sobre</a>
        <a href="#projeto">Projeto</a>
        <a href="#contato">Contato</a>
    </nav>
</header>

<body>
    <form>
        <label for="idade">IDADE:</label>
        <input type=$age>
        <br> <br>
        <h2> <?= $age ?> </h2>
        <h3> <?= $situation ?> </h3>
    </form>
    
</body>
</html>