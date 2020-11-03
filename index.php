<?php
$str = 'Mano batai buvo trys du nupizdino gaidys';
$str = preg_replace_callback('/(\w)(.?)/', 'altcase', $str);
print $str;

function altcase($m){
    return strtoupper($m[1]).$m[2];
}


/**
 * Capitalizes every other character
 *
 * @param $string
 */
function alt_caps(&$string)
{
    $array = str_split($string);
    $count = 0;
    foreach ($array as &$char) {
        if ($count % 2 == 0 && $char != " ") {
            $char = strtoupper($char);
            $count++;
        } elseif ($char != " ") {
            $char = strtolower($char);
            $count++;
        }
    }
    $string = implode($array);
}

$string = 'mano batai buvo trys viens pasislepe gaidys';
alt_caps($string);
var_dump($string);
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
