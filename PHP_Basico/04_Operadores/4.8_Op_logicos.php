<?php

#Operadores Logicos

// and, && - E lógico
// or, || - Ou lógico
// not, ! - Não lógico
// xor - Ou exclusivo

$a = true;
$b = false;
$c = true;

// Exemplo com and (&&)
$resultado_and = $a && $b; // false
echo "Resultado de a AND b: " . ($resultado_and ? 'true' : 'false') . "\n";

// Exemplo com or (||)
$resultado_or = $a || $b; // true
echo "Resultado de a OR b: " . ($resultado_or ? 'true' : 'false') . "\n";

// Exemplo com not (!)
$resultado_not = !$b; // true
echo "Resultado de NOT b: " . ($resultado_not ? 'true' : 'false') . "\n";

// Exemplo com xor
$resultado_xor = $a xor $c; // false, pois ambos são true
echo "Resultado de a XOR c: " . ($resultado_xor ? 'true' : 'false') . "\n";