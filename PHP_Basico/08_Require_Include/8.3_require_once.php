<?php

//Require_once - Inclui e avalia o arquivo especificado durante a execução do script.
//Se o arquivo já foi incluído, ele não será incluído novamente.

$nomes = require_once "dados.php";
echo "<pre>";
print_r($nomes);