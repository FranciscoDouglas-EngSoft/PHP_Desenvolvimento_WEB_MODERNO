<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .card{
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <?php for($i = 1; $i <= 5; $i++):?>
        <div class="card">
            <h3>Titulo <?= $i ?></h3>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    <?php endfor; ?>
</body>
</html>