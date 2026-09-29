<?php
$age=$_POST["age"];
$name=$_POST["name"];

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
    <form method="POST">
        <label>NAME:</label>
        <input type="text" class="name" id="name" name="name">
        <label>AGE:</label>
        <input type="number" class="age" id="age" name="age">
        <br> <br>
        <h2> <?= $age ?> </h2>
        <h3> <?= $situation ?> </h3>
    </form>
    
</body>
</html>