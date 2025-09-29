<?php 

#Operadores de Imcrement e Decremento
// ++$var - Incrementa a variável antes de usá-la (pré-incremento)
// $var++ - Incrementa a variável depois de usá-la (pós-incremento)
// --$var - Decrementa a variável antes de usá-la (pré-decremento)
// $var-- - Decrementa a variável depois de usá-la (pós-decremento)

$var = 5;
echo ++$var; // 6 (pré-incremento)
echo "\n";
echo $var++; // 6 (pós-incremento, mas var agora é 7)
echo "\n";
echo $var;   // 7
echo "\n";
echo --$var; // 6 (pré-decremento)
echo "\n";
echo $var--; // 6 (pós-decremento, mas var agora é 5)
echo "\n";
echo $var;   // 5
echo "\n";