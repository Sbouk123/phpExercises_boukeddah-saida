<?php

include_once ""
function averageCalc($numbers) {
     $sum = 0;
     $nbElement = count($numbers);
 
     foreach ($numbers as $number) {
         $sum += $number;
     }
 
     $average = $sum / $nbElement;
     return $average;
 }
 
 ?>