<?php

//Instrucao switch
$cor = "vermelho";
switch($cor){
    case "vermelho":
        echo "A cor eh vermelho";
        break;
    case "azul":
        echo "A cor eh azul";
        break;
    case "verde":
        echo "A cor eh verde";
        break;
    default:
        echo "A cor nao eh vermelho, azul ou verde";
        break;
}