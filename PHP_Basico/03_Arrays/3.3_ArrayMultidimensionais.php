<?php

//Arrays multidimensionais
$carros = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

$lojas = [
    "SP" => ["Loja 1", "Loja 2", "Loja 3"],
    "RJ" => ["Loja 4", "Loja 5"],
    "MG" => ["Loja 6", "Loja 7", "Loja 8", "Loja 9"]
];

//Acessando valores
echo $carros[0][0]; //Volvo
echo "<br>";
echo $lojas["SP"][1]; //Loja 2
echo "<br>";


echo "<pre>";
print_r($carros);
echo "</pre>";


echo "<br>";
print_r($lojas);