<?php


#  Пользовательская сортировка по ключас

//void uksort(array &$arr , string $callback)
function html($c, $d)
{
    $c = preg_replace('@^(a|an|the) @', '', $c);
    $d = preg_replace('@^(a|an|the) @', '', $d);
    return strcasecmp($c, $d);
}

$a = array("John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4);

uksort($a, "html");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}
?>

