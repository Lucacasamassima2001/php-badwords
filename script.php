<?php

    $paragrafo= $_GET["paragrafo"];
    $lunghezza= strlen($paragrafo);
    $parola= $_GET["word"];
    $testocensura= str_replace($parola, "***", $paragrafo);
    $lunghezza1= strlen($testocensura);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Il tuo testo è lungo: <?php echo $lunghezza;?> </h1>
    <h1>Il tuo testo è:</h1>
    <p><?php echo $paragrafo;?></p>

    <h1>Il tuo testo censurato è lungo: <?php echo $lunghezza1;?> </h1>
    <h1>Il tuo testo è:</h1>
    <p><?php echo $testocensura;?></p>
</body>
</html>