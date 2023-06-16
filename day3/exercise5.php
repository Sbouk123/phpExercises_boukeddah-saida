<?php
 function averageCalc($numbers) {
     $sum = 0;
     $nbElement = count($numbers);
 
     foreach ($numbers as $number) {
         $sum += $number;
     }
 
     $average = $sum / $nbElement;
     return $average;
 }

 $nbArray = [75, 80, 90, 95, 85];
 $averageArray = averageCalc($nbArray);
 
 echo "La moyenne des éléments du tableau est : $averageArray";
 ?>