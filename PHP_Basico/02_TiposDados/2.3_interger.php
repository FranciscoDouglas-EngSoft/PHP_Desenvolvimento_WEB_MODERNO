<?php

//Valores inteiros (integer ou int)
$var1 = 1234;
$var2 = -1234;
$var3 = 0123; //octal (base 8) = 83 em decimal

//Em sistemas de 32 bits o valor máximo é 2147483647
//Em sistemas de 64 bits o valor máximo é 9223372036854775807

echo $var1;
echo "<br>";
echo $var2;
echo "<br>";
echo $var3;

//Vejamos o que acontece se ultrapassarmos o valor máximo
$var4 = 2147483648;
echo "<br>";
echo $var4; //o valor é convertido para float

//Converter string para integer
$var5 = "1234";
$var5 = (int)$var5;
echo "<br>";
echo gettype($var5); //integer