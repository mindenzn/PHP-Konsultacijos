<?php
$array = [9, 1, 2, 1, 4, 10, 5, 6, 6, 10, 6, 7];

$result = array_unique($array);

$array_new_keys = array_values($result);

var_dump($array_new_keys);
?>