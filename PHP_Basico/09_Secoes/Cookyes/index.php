<?php

session_name("Minha_Sessão_Atual");
session_set_cookie_params(60*3);
session_start();

$nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : '-';
$apelido = !empty($_SESSION['apelido']) ? $_SESSION['apelido'] : '-';

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'nav.php'?>

    <hr>
    <h2>Exerciico com sessoes de PHP</h2>

    <h3>Valor da variavel 'nome':</h3>
    <h1><?= $nome?></h1>

    <h3>Valor da variavel 'apelido':</h3>
    <h1><?= $apelido?></h1>
</body>
</html>