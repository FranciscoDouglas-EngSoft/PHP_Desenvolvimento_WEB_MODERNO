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
    <h1>Aluno com o nome em vermelho</h1>
    <ul>
        <?php foreach($nomes as $key => $nome): ?>
            <li>
                <?php 
                    if($key == 4) 
                        echo "<span style='color:red;'>$nome</span>"; 
                    else echo $nome; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <p>O aluno com o nome em vermelho é o quinto da lista.</p>
</body>
</html>