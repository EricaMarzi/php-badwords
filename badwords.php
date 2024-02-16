<?php

$text = $_GET['text'];
$badword = $_GET['badword']

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-warning">Testo non censurato</h1>
        <p>
            <?= $text ?>
        </p>
        
        <h1 class="text-success">Testo censurato</h1>
        <p>Da ottenere</p>
        <h3>Parola Censurata</h3>
        <p>
            <?= $badword ?>
        </p>
    </div>
</body>
</html>