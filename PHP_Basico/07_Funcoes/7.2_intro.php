
<?php

//2 Exemplos de Funcoes

/**
 * Este script demonstra que, em PHP, funções podem ser chamadas antes de sua declaração no código, desde que estejam no mesmo arquivo. Isso ocorre porque o PHP interpreta todo o arquivo antes de executar qualquer instrução, tornando todas as funções disponíveis para chamada, independentemente da ordem em que aparecem.
 
Funções apresentadas:
- apresentar(): Exibe uma mensagem indicando que é uma função.
- executar(): Exibe uma mensagem indicando que está sendo executada.
 */
apresentar();
executar();


function apresentar(){
    echo "Ola, eu sou uma funcao!<br>";
}
function executar(){
    echo "Estou sendo executada!<br>";
}