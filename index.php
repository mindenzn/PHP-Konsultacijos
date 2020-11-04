<?php
/**
 *function to square number
 * @param int $number
 * @return int
 */
function square(int $number): int
{
    return pow($number, 2);
}
var_dump($_POST);
if (isset($_POST['number'])) {
    if (is_numeric(trim($_POST['number']))) {
        $text = square(intval(trim($_POST['number'])));
    } else {
        $text = 'Please enter correct number';
    }
} else {
    $text = 'Enter any number';
}
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
<body>
<form method="POST">
    <input name="number" type="text">
    <button type="submit">Submit</button>
</form>
<div><?= $text ?></div>
</body>
</html>