<?php
#Funcoes Associadas a Arrays

$client = [
    "nome" => "João",
    "idade" => 25,
    "altura" => 1.75,
    "cidade" => "São Paulo"
];

//Aprensentar um valor do array associativo
echo $client["nome"];

//Verificar se existe um indice no array
var_dump(array_key_exists("idade", $client));
echo "<br>";

//Array para string
echo implode(", ", $client);
echo "<br>";

//Criando um novo array associativo
$newClient = [
    "nome" => "Maria",
    "idade" => 30,
    "altura" => 1.65,
    "cidade" => "Rio de Janeiro"
];