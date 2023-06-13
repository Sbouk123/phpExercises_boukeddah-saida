<?php
$packages = [["Amazon", 20, 45000], ["Cdiscount", 8, 192000], ["Etsy", 4, 68000]];

foreach ($packages as $package) {
  $name = $package[0];
  $weight = $package[1];
  $volume = $package[2];
  
  if ($weight >= 10 && $volume > 68000) {
    echo "SPECIAL: " . $name . "<br/>";
  } else {
    echo "STANDARD: " . $name . "<br/>";
  }
}
?>
