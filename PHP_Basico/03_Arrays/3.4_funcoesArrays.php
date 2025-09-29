<?php 

//Funcoes de Arrays
$nome = ["João", "Maria", "Pedro"
];

//is array
$resultado = is_array($nome);
var_dump($resultado);

//Contando elementos do array
echo "<br>";
echo count($nome);
echo "<br>";

//Adicionando elementos no array
array_push($nome, "Ana", "Julia");
echo "<br>";

//retirando o ultimo elemento do array
array_pop($nome);

//Adicionando elemento no inicio do array
array_unshift($nome, "Luiz");

//Retirando elemento do inicio do array
array_shift($nome);