<?php
if (!empty($_POST['submit'])) {
    $text = date('l');
    {
        if ($text == 'Monday') {
            $text = 'Pirmadienis';
        } elseif ($text == 'Tuesday') {
            $text = 'Antradienis';
        } elseif ($text == 'Wednesday') {
            $text = 'Treciadienis';
        } elseif ($text == 'Thursday ') {
            $text = 'Ketvirtadienis';
        } elseif ($text == 'Friday') {
            $text = 'Penktadienis';
        } elseif ($text == 'Saturday ') {
            $text = 'Sestadienis';
        } elseif ($text == 'Sunday') {
            $text = 'Sekmadienis';
        }
    }
} else $text = 'Spausk mygtuka ir suzinok data'


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
    <input type="submit" name="submit" value="Atsapausdinti data">
</form>
<h1><?php print $text ?></h1>
</body>
</html>