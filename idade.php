<?php
$age=$_POST["age"];
$name=$_POST["name"];

if($age >= 18){
    $situation = "ACCESS GRANTED";
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
    <title>AGE AND NAME</title>
</head>

<header>
    <div class="logo">
        <h2>Jose <span>Oropesa</span> </h2>
    </div>
    <nav>
    <a href="index.php">BACK TO MAIN</a>
    </nav>
    
</header>

    <body>
        <main>
            <section class="form-geral">
                <div class="form-cont">
                    <div class="form-titulo">
                        <h1>REGISTER</h1>
                    </div>
                <form method="POST">
    <label>NAME:</label>
    <input type="text" class="name" id="name" name="name">
    <br> <br>
    <label>AGE:</label>
    <input type="number" class="age" id="age" name="age">
    <br> <br>
    <br>
    <button type="submit" class="boton">REGISTER</button>
</form>
</div>
    
<div class="exit">
<h1> NAME:<?= $name ?> </h1>
<h2> AGE:<?= $age ?> </h2>
<h2> SITUATION:<?=  $situation ?> </h2>
</div>
            </section>
        </main>  
    </body>
</html>