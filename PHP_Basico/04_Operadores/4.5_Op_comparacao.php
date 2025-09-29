<?php 

#Operadores de Comparação

// Igual (==)
// == compara apenas o valor
// === compara o valor e o tipo
// != diferente
// !== diferente (valor ou tipo)
// < menor que
// > maior que
// <= menor ou igual a
// >= maior ou igual a
// <=> nave espacial
// retorna -1 se o da esquerda for menor, 0 se forem iguais e 1 se o da esquerda for maior


var_dump(10 == 10); //true
var_dump(10 == "10"); //true
var_dump(10 === "10"); //false
var_dump(10 != 10); //false
var_dump(10 !== "10"); //true
var_dump(10 < 20); //true
var_dump(10 > 20); //false
var_dump(10 <= 10); //true


//Spaceship Operator <=> e Operadores Lógicos 
var_dump(10 <=> 20); //-1
var_dump(20 <=> 20); //0
var_dump(30 <=> 20); //1
var_dump(10 == 10 and 20 > 15); //true
var_dump(10 == 10 && 20 > 15); //true


//Operador condicional (Ternário)
$media = 7;
echo ($media >= 7) ? "Aprovado" : "Reprovado"; //Aprovado