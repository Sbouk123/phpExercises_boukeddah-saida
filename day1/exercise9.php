<?php
$numbers = array(21565, 3412, 180, 1556, 182, 84, 15);
$first = true;

foreach ($numbers as $number) {
  if ($number % 3 != 0) {
    if ($first) {
      echo $number;
      $first = false;
    } else {
      echo ", " . $number;
    }
  }
}
?>
