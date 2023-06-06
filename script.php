<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Il tuo testo è lungo: <?php echo strlen($_GET["paragrafo"]);?> </h1>
    <h1>Il tuo testo è:</h1>
    <p><?php echo $_GET["paragrafo"];?></p>
</body>
</html>