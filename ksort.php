<?php

# Сортировка массива по ключам php
/*
 *
void ksort(array &$arr [, int $flag])
void krsort(array &$arr [, int $flag])
*/


$B = [
    "a" => "TV",
    "b" => "WWWW",
    "c" => "AAA",
    "d" => "PHP"
];
  ksort($B);
  print_r($B);
  //
?>
