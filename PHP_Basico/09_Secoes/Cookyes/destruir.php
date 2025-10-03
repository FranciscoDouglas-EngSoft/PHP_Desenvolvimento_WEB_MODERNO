<?php
session_name("Minha_Sessão_Atual");
session_set_cookie_params(60*3);
session_start();

//remover todas as variaveis da sessao
session_unset();

//Destrui toda a sessao
session_destroy();
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
    <h2>Todos os valores foram destruidos</h2>

</body>
</html>