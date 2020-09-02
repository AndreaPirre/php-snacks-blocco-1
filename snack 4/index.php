


<?php
// snack 4


function getArrayOfIntegers($min, $max, $nItems)
{
    $min = '1';
    $max = '100';
    $nItems = '15';
    $newArray = [];


        while (count($newArray) < $nItems) {
        $number = rand($min, $max);
        if (!in_array($number, $newArray)) {
        $newArray[] = $number;
        }
    }
    return $newArray;
}

?>
