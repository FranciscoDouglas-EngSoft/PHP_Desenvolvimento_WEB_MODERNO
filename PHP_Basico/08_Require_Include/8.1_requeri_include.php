<?php

//REQUERE E INCLUDE
//require -> se o arquivo nao for encontrado, gera um erro fatal e para a execucao do script
//include -> se o arquivo nao for encontrado, gera um aviso, mas o script continua a ser executado

/*Existe 4 formas de incluir arquivos em PHP
1. require 'arquivo.php';
2. require_once 'arquivo.php'; -> so inclui o arquivo uma vez
3. include 'arquivo.php';
4. include_once 'arquivo.php'; -> so inclui o arquivo uma vez
*/

//INCLUDE
include 'script.php'; //inclui o arquivo script.php
include 'outro.php'; //o arquivo nao existe, mas o script continua a ser executado
include 'script.php'; //inclui o arquivo script.php

echo "Depois do include<br>";

/*Principal diferenca entre require e include
require 'outro.php'; -> o arquivo nao existe, gera um erro fatal e para a execucao do script
echo "Depois do require<br>"; -> essa linha nao sera executada
*/

echo "<br>, <br>";
echo "<hr>";
//REQUIRE
require 'script.php'; //inclui o arquivo script.php
require 'outro.php'; //Mostra um erro fatal, pois o arquivo nao existe
echo "Depois do require<br>"; //essa linha nao sera executada
require 'script.php'; //essa linha nao sera executada