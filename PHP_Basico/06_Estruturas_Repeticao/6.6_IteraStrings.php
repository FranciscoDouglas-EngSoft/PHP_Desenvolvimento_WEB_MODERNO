<?php

//Iterando strings com for

$palavra = "Formação em PHP do Básico ao Avançado";

for($i = 0; $i < strlen($palavra); $i++){
    echo $palavra[$i] . "<br>";
}