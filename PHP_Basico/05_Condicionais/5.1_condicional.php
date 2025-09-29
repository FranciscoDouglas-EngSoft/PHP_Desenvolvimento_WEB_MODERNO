<?php

//Estruturas condicionais if, else if, else

$idade = 17;

if($idade < 16){
    echo "Não vota";
} else if($idade >= 16 && $idade < 18 || $idade > 65){
    echo "Voto opcional";
} else {
    echo "Voto obrigatório";
}