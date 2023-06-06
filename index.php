<?php

$saluto = "ciao";


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
    <h1>Compila il form</h1>
    <form action="script.php">
        <input type="text" name="nome" placeholder="Scrivi qualcosa...">
        <button type="submit">Inviami</button>
        <button type="reset">Resettami</button>



    </form>
    <!-- <?=  $saluto; ?> -->
</body>
</html>