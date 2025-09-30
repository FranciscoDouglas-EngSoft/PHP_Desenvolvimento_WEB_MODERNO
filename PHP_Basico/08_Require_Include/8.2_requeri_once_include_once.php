<?php

//INCLUDE_ONCE E REQUIRE_ONCE
//require_once -> se o arquivo nao for encontrado, gera um erro fatal e para a execucao do script
//include_once -> se o arquivo nao for encontrado, gera um aviso, mas o script continua a ser executado

include_once 'script.php'; //inclui o arquivo script.php
include_once 'outro.php'; //o arquivo nao existe, mas o script continua a ser executado

require_once 'script.php'; //inclui o arquivo script.php
require_once 'outro.php'; //Mostra um erro fatal, pois o arquivo nao existe


//Exemplo prático
requeri_once('./function.php');

echo adicionar(20, 5)."<br>";
echo subtrair(20, 5)."<br>";
echo multiplicar(20, 5)."<br>";
echo dividir(20, 5)."<br>";