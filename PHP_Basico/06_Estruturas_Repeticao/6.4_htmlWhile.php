<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <h1>Tabuada Simples</h1>
    <div class="container">
        <?php
            $contador = 1;
            while($contador <= 10){
                echo "Contador: $contador <br>";
                $contador++;
            }
        ?>
    </div>

</body>
</html>