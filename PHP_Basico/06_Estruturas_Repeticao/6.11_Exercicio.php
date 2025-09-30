<?php

$resultador = [];

for($i = 1; $i <= 10; $i++){
    $resultador[] = $i * 327;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultados</h1>
    <ul>
        <?php foreach($resultador as $resultados):?>
            <li><?php echo $resultados; ?></li>
        <?php endforeach; ?>
    </ul>
</body> 
</html>