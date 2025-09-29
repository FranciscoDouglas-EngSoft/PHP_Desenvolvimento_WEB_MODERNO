<?php

//Arrays são estruturas de dados que armazenam
// múltiplos valores em uma única variável.
$frutas = array("Maçã", "Banana", "Laranja");
//Adicionando valores
$frutas[] = "uva";
echo $frutas[3]; // Acessa o quarto elemento do array
echo "\n";

//Adicionando com push
array_push($frutas, "uva");
echo $frutas[3]; // Acessa o quarto elemento do array

//Removendo valores
array_pop($frutas); // Remove o último elemento do array
echo "\n";
print_r($frutas); // Exibe o array atualizado