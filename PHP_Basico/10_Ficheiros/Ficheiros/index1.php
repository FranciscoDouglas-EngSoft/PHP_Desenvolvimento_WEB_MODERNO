<?php

echo"<pre>";

//Listando os ficheiros
echo __DIR__.'<br>';
$files = scandir(__DIR__); //Constante magica
print_r($files);

/*
O . e o .. estao sempre presentes em cada pasta
São identificados como a pasta atual (.) 
E a pasta anterior (..)*/

echo '<hr>';
$files2 = scandir('./');
print_r($files2);

echo '<hr>';
$files3 = scandir('./');
print_r($files3);

//Podemos questione se cada elemento e uma pasta ou ficheiro
echo '<hr>';
foreach($files as $item){
    echo is_file($item) ? 'Ficheiro' : 'Pasta'; //is_dir() identifica se e pasta
    echo '<br>';
}

//Podemos lista apenas os ficheiros
echo '<hr>';
$files = scandir(__DIR__);
foreach($files as $item){
    if(is_file($item)){
        echo $item. '<br>';
    }
}