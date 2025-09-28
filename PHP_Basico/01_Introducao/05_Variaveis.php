<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ola Meu Nome e Francisco Estou aprendendo PHP</h1>

    <?php
        $nome = "Francisco";
        $idade = 25;
        $altura = 1.75;
        $casado = false;

        echo "Meu nome e $nome, tenho $idade anos, minha altura e $altura metros e sou casado? " . ($casado ? 'Sim' : 'Nao');
    ?>

    <!--Escrevendo HTML a partir do PHP-->
    <?php
        echo "<h2>Estou aprendendo PHP</h2>";
        echo "<p>PHP e uma linguagem de script do lado do servidor, muito utilizada para desenvolvimento web.</p>";
    ?>
</body>
</html>