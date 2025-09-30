<?php

//Criando a Tabuada do 5 ate o 20
 $numero = 5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            width: 300px;
            border-collapse: collapse;
        }
        th, td {
            padding: 4px 5px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Tabuada do 5</h1>

   

    <table border="1">
        <tr>
            <th>Operação</th>
            <th>Resultado</th>
        </tr>

        <?php
            for($i = 1; $i <= 20; $i++){
                echo "<tr>";
                echo "<td>" . $numero . " x " . $i . "</td>";
                echo "<td>" . ($numero * $i) . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>