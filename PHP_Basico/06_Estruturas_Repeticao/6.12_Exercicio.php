<?php

$nomes = ["Ana", "Maria", "João", "Pedro", "Lucas", "Mariana", "Beatriz", "Rafael", "Gabriel", "Julia"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Alunos</h1>
    <ul>
        <?php foreach($nomes as $key => $nome):?>
            <li><?php 
                    if($key == 4) 
                    continue; 
                echo $nome; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>