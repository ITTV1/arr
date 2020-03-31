<?php

# Переворачивание массива php
/*
array array_reverse(array $array  [, bool $key=false])
array array_reverse(array $array  [, bool $key=true])

arsort()


arsort()

*/

$B = [
    "a" => "TV",
    "b" => "WWWW",
    "c" => "AAA",
    "d" => "PHP"
];
  asort($B);
  $B = array_reverse($B);
  print_r($B);
  //
?>
