<?php
$quotations = [
  "Quand Paris s’enrhume, l’Europe a froid",
  "S'il y a un diamant dans la poitrine, il brille sur le visage",
  "La joie de vivre n'est pas un but, mais un devoir"
];

$count = 0;

function countingVowels($quotations, &$count) {
  foreach ($quotations as $str) {
    for ($i = 0; $i < strlen($str); $i++) {
      $char = strtolower($str[$i]);
      if ($char === 'a' || $char === 'e' || $char === 'i' || $char === 'o' || $char === 'u' ||  $char === 'y') {
        $count++;
      }
    }
    echo "$str : $count<br>";
    $count = 0;
  }
}

countingVowels($quotations, $count);
?>
