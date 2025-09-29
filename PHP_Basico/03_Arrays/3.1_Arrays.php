<?php

//Arrays são estruturas de dados que armazenam 
// múltiplos valores em uma única variável.

$frutas = array("Maçã", "Banana", "Laranja");
echo $frutas[0]; // Acessa o primeiro elemento do array
echo "\n";
echo $frutas[1]; // Acessa o segundo elemento do array
echo "\n";
echo $frutas[2]; // Acessa o terceiro elemento do array


//Criando um array associativo
$pessoa = array(
    "nome" => "João",
    "idade" => 25,
    "cidade" => "São Paulo"
);
echo $pessoa["nome"]; // Acessa o valor associado à chave "nome"
echo "\n";
echo $pessoa["idade"]; // Acessa o valor associado à chave "idade"
echo "\n";
echo $pessoa["cidade"]; // Acessa o valor associado à chave "cidade"
echo "\n";

//Verificando se o item existe no array
if (in_array("Banana", $frutas)) {
    echo "Banana está no array de frutas.";
} else {
    echo "Banana não está no array de frutas.";
}