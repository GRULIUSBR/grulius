<?php

$nomeEscola = "SENAI";

//exibir mensagem
function saudacao()
{
    return "BEM VINDO AO SISTEMA!";
}

//receber um nome
function cumprimentar($nome)
{
    return "OLÁ, " . $nome . "!";
}

//somar dois numeros
function somar($num1, $num2)
{
    $resultado = $num1 + $num2;
    return $resultado;
}
