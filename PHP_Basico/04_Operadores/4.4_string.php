<?php

//Operadores de Strings
$nome = "João";
$sobrenome = "Silva";

$nomeCompleto = $nome . " " . $sobrenome; //Concatenação
echo $nomeCompleto . "<br>";

$nomeCompleto .= " Souza"; //Concatenação com atribuição
echo $nomeCompleto . "<br>";