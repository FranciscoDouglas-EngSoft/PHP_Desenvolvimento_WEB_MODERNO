<?php
//Estrutura match

$numero = 14;

$resultado = match($numero){
    1,3,5,7,9,11,13 => "O numero eh impar",
    2,4,6,8,10,12,14 => "O numero eh par",
    default => "O numero nao esta entre 1 e 14"
};

echo $resultado;