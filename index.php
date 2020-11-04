<?php
if (!empty($_POST)) {
    $text = '';
    if (intval($_POST['amzius']) >= 18 || intval($_POST['amzius']) <= 26) {
        if (intval($_POST['teistumas']) == 2) {
            $text .= 'Jus ESATE suakiamas i kariuomene';
        } else $text .= 'Jus NESATE saukiamas i kariuomene';
    }
} else $text = 'Iveskite reikamus laukus';


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

</style>
<body>
<form method="POST">
    <input type="number" name="amzius" required>
    <label for="teistas">Teistas</label>
    <input id="teistas" type="radio" name="teistumas" value="1">
    <label for="neteistas">Neteistas</label>
    <input id="neteistas" type="radio" name="teistumas" value="2">
    <input type="submit" name="submit" value="Pateikti">
</form>
<h1><?php print $text ?></h1>
</body>
</html>