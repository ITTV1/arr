<?php

## Естественная сортировка php

//void natsort(array $array)

//voio natcasesort(array &$array)


  $B = [
    "img100.gif",
    "img10.gif",
    "img20.gif",
    "img199.gif",
  ];
//  asort($B);
  natsort($B);
  echo "<pre>"; print_r($B);






  /*
   *
   *
   *
   * Array
(
    [1] => img10.gif
    [0] => img100.gif
    [3] => img199.gif
    [2] => img20.gif
)
   *
   *
   *
   *
   *
   *
   *
   *
   * Array
   *
(
    [1] => img10.gif
    [2] => img20.gif
    [0] => img100.gif
    [3] => img199.gif
)

   */
?>
