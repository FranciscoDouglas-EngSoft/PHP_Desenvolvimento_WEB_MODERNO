<?php

//Constantes em PHP são tipos de variaveis que não podem ser modificadas

//Existe 2 formas de definir constantes
//1 - Usando a função define(nome, valor, case_insensitive)
define("NOME", "FRANCISCO", true); //true torna a constante case insensitive
define("IDADE", 25);
echo NOME . "<br>";
echo IDADE . "<br>"; //funciona por causa do true

//2 - Usando a palavra reservada const
const ALTURA = 1.75;
echo "$ALTURA <br>";

//Constantes são globais, ou seja, podem ser acessadas de qualquer lugar do script
//Constantes são geralmente escritas em letras maiusculas
//São imutaveis, ou seja, não podem ser alteradas
//Não podem ser definidas dentro de funções, loops ou blocos condicionais