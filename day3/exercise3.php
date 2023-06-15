<?php
$count = 0;
$start = 1; 
$end = 10; 

for ($i = $start; $i <= $end; $i++) { 
    $count += $i * $i; 
}

echo "La somme des carrés des nombres entre $start et $end est : $count "; 
?>


