<?php

//Escopo de variaveis
//Variaveis declaradas fora de funcoes sao globais

$nome = "PHP Developer"; //Variavel global

function exibirNome(){
    global $nome; //Tornando a variavel global dentro da funcao
    echo $nome;
}

exibirNome();
echo "<br>";
echo $nome; //Acessando a variavel global fora da funcao

?>
<br><br>


<?php
//Escopo de Variaveis Locais
//Variaveis declaradas dentro de funcoes sao locais
function exibirCidade(){
    $cidade = "Sao Paulo"; //Variavel local
    echo $cidade;
}

exibirCidade();
echo "<br>";
?>