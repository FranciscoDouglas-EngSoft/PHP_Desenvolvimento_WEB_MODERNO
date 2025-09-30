<?php

//Parametros da Função

function apresentar($nome, $idade){
    return "Ola eu sou $nome e tenho $idade anos!<br>";
}

$nome1 = "João";
$idade1 = 25;

echo apresentar($nome1, $idade1);
echo apresentar("Maria", 30);

echo "<hr>";

//Calculando soma de dois numeros
function somaCalcular($a, $b=3){
    return $a + $b;
}
$resultado1 = somaCalcular(10, 20);
$resultado2 = somaCalcular(5, 15);
$resultado3 = somaCalcular(7); // Usando o valor padrão para $b

echo "O resultado da soma é: $resultado1<br>";
echo "O resultado da soma é: $resultado2<br>";
echo "O resultado da soma é: $resultado3<br>";