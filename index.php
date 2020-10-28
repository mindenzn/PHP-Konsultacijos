<?php
$names = ['mavis', 'zAyn', 'leTTy', 'sAmuel', 'MabbeLe', 'mereDit'];
var_dump($names);

function letters($names)
{
    $names_converted = [];
    foreach ($names as $name) {
        $names_converted[] = ucfirst(strtolower($name));
    }
    return $names_converted;
}

var_dump(letters($names));
?>