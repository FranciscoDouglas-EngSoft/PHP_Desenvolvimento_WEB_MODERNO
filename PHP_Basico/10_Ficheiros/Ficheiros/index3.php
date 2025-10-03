<?php

//Para remover pastas
rmdir(__DIR__.'/pasta_teste');

//Mais uma vez vaa aparecer um avise se a pasta nao existe
if(file_exists(__DIR__.'/pasta_teste')){
    rmdir(__DIR__.'/pasta_teste');
}

//Importante: A Pasta so pode ser removida se existive vazia
rmdir(__DIR__.'/data');