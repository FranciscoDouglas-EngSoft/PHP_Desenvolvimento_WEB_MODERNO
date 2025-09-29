<?php

#Operadores de Controle de Erro
// @ - Suprime erros
// try/catch - Captura exceções

$ficheiro = @file('nao_existe.txt'); // O @ suprime o erro que seria exibido
if ($ficheiro === false) {
    echo "Erro ao tentar ler o ficheiro.";
}

echo "\n";

// Exemplo de try/catch
function dividir($numerador, $denominador) {
    if ($denominador == 0) {
        throw new Exception("Divisão por zero não é permitida.");
    }
    return $numerador / $denominador;
}

try {
    echo dividir(10, 2); // 5
    echo dividir(10, 0); // Isso vai gerar uma exceção
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}