<?php
//Podemos cria e remover pastas
mkdir(__DIR__.'/pasta_teste');

//Se a pasta existe, vai aparecer um aviso
//Devemos sempre saber se existe ou nao
//Usaremos a funcao file_exists()

if(!file_exists(__DIR__./'pasta_teste')){
    mkdir(__DIR__.'/pasta_teste');
}