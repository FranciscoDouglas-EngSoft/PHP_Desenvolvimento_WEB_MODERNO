<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 5px;
            font-size: 16px;
        }
        button {
            padding: 5px 10px;
            font-size: 16px;
        }
        h2 {
            color: #333;
        }
        .resultado {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Decremento de Palavra</h1>
    <form action="" method="post">
        <label for="palavra">Digite uma palavra:</label>
        <input type="text" name="palavra" id="palavra" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $palavra = $_POST["palavra"];
            $tamanho = strlen($palavra);

            echo "<div class='resultado'>";
            echo "<h2>Decremento da palavra '$palavra':</h2>";
            for ($i = $tamanho; $i >= 0; $i--) {
                echo substr($palavra, 0, $i) . "<br>";
            }
            echo "</div>";
        }   
        ?>
</body>
</html>