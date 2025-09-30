<?php

//Utilizando o ForEach

$cores = array("Azul", "Verde", "Amarelo", "Vermelho");

foreach($cores as $valor){
    echo $valor . "<br>";
}


echo "<hr>";

$posicoes = [
    "Primeira" => "Azul",
    "Segunda" => "Verde",
    "Terceira" => "Amarelo",
    "Quarta" => "Vermelho"
];

foreach($posicoes as $key => $valor){
    echo $key . ": " . $valor . "<br>";
}