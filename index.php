<?php
$string = 'kuKUUUUkuUUku';
$new_string = 'kuKUUUUkuUUkuttewww';
/**
 * @param $string
 * @return string|string[]
 */
function remove_vowels($string)
{
    $vowels = array("a", "e", "i", "o", "u", " ");
    $string = str_ireplace($vowels, "", $string);
    return $string;

}

/**
 * @param $new_string
 */
function remove_vowels_reference(&$new_string)
{
    $vowels = array("a", "e", "i", "o", "u", " ");
    $new_string = str_ireplace($vowels, "", $new_string);
}

var_dump(remove_vowels($string));

remove_vowels_reference($new_string);
var_dump($new_string);


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
</body>
</html>