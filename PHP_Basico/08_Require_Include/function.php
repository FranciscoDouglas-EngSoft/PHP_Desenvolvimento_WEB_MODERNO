<?php

function adicionar($a, $b) {
    return $a + $b;
}
function subtrair($a, $b) {
    return $a - $b;
}
function multiplicar($a, $b) {
    return $a * $b;
}
function dividir($a, $b) {
    if ($b == 0) {
        return "Erro: Divisao por zero!";
    }
    return $a / $b;
}
?>
