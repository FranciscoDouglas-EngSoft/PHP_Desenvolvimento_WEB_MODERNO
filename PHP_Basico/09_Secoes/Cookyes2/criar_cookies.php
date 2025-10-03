<?php

//Cria cookies
$nome = "criando_os_cookies_do_php";
$valor = "conteudo_do_cookies";
$expiracao = 3600; // 1hora de duracao
setcookie($nome, $valor, time() + $expiracao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once('nav.php')?>

    <h3>Inicio</h3>
    <hr>
    <p>Valor do Cookie: <?= $valor?></p>
</body>
</html>