<?php
$hurdle_jump = [rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10)];
$jump_height = rand(5, 12);

function jump($array, $number)
{
    foreach ($array as $jump) {
        if ($jump > $number) {
            return true;
        } else return false;
    }

}

var_dump(jump($hurdle_jump, $jump_height));

$two_digit_num = rand(11, 99);

function reverse($jump, $number_r)
{
    $converted = strrev($number_r);
    if (intval($converted) == $jump) {
       return true;
    }else return false;
    
}

var_dump(reverse($jump_height, $two_digit_num));
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<section>

</section>
</body>
</html>
