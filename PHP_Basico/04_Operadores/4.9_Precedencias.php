<?php

#Precedência de operadores
#A precedência de operadores define a ordem na qual os operadores são avaliados em expressões
#Operadores com maior precedência são avaliados antes dos operadores com menor precedência
#Se dois operadores têm a mesma precedência, a avaliação é feita da esquerda para a direita
#Operadores com maior precedência:

#1. Operadores aritméticos: *, /, %
#2. Operadores aritméticos: +, -
#3. Operadores de comparação: <, <=, >, >=
#4. Operadores de igualdade: ==, !=
#5. Operadores lógicos: &&, ||
#6. Operadores de atribuição: =, +=, -=, *=, /=, %=
#7. Operador de concatenação: .
#8. Operador ternário: ? :
#9. Operador de atribuição de concatenação: .=
#10. Operador de incremento/decremento: ++, --
#11. Operador de negação: !
#12. Operador de array: []
#13. Operador de chamada de função: ()

$resultado = 10 + 5 * 2; // Multiplicação é avaliada antes da adição
echo $resultado . "\n"; // Saída: 20