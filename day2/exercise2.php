<?php
$tab = array("kiwi", "pomme", "poire", "litchi", "rhubarbe");
$choice = "poire";

function searchingFruit($tab, $choice) {
  foreach ($tab as $fruit) {
    if ($fruit === $choice) {
      return "Le fruit a été trouvé : " . $choice;
    }
  }
  return "Recherche infructueuse.";
}

$result = searchingFruit($tab, $choice);
echo $result;
?>