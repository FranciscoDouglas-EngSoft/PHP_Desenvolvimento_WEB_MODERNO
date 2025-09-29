<?php

//Valores do Tipo Float (números de ponto flutuante, números decimais ou números reais)
$var1 = 1.234;
$var2 = 1.2e3; //1.2 x 10^3 = 1200
$var3 = 1.2e-3; //1.2 x 10
//-3 = 0.0012

echo $var1;
echo "<br>";
echo $var2;
echo "<br>";
echo $var3;

//32 ou 64 bits
//Depende do sistema operacional
echo PHP_FLOAT_MIN;
echo "<br>";
echo PHP_FLOAT_MAX;
echo "<br>";

//Infinito
$var4 = 1.9e411;
echo $var4;