


<?php

function randomGen($min, $max, $nItems)
    {
         $newArray = [];

             while (count($newArray) < $nItems) {
             $number = rand($min, $max);
             if (!in_array($number, $newArray)) {
             $newArray[] = $number;
             }
         }
         return $newArray;
    }

print_r(randomGen(1,50,15));
?>
