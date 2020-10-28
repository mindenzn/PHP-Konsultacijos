<?php
$num = rand(-10, 10);
$num2 = rand(-10, 10);
var_dump($num, $num2);
/**
 * @param int $num
 * @param int $num2
 * @return bool
 */
function check( $num, $num2)
{
    if (($num < 0 && $num2 < 0) || ($num > 0 && $num2 > 0) || ($num && $num2 == 0)) {
        return true;
    } else return false;
}

var_dump(check($num, $num2));
?>