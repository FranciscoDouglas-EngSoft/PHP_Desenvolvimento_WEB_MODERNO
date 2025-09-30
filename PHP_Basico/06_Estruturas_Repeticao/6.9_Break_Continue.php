<?php

//Break e Continue

//Break - Interrompe o laço
//Continue - Interrompe a iteração atual e vai para a próxima

for($i = 0; $i <= 20; $i++){
    if($i === 10){
        break; //Interrompe o laço quando $i for igual a 10
    }
    echo $i . PHP_EOL;
}

echo "<br>";
echo "------------------" . PHP_EOL;
echo "<br>";


for($i = 0; $i <= 20; $i++){
    if($i === 10){
        continue; //Interrompe a iteração atual quando $i for igual a 10
    }
    echo $i . PHP_EOL;
}

echo "<br>";
echo "------------------" . PHP_EOL;
echo "<br>";


for($i = 0; $i <= 20; $i++){
    if($i % 2 === 1){
        continue; //Interrompe a iteração atual quando $i for ímpar
    }
    echo $i . PHP_EOL;
}