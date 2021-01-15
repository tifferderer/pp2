<?php
function printArr($array) {
    foreach($array as $value) {
        echo "<p>$value</p>";
    }
}

function largest($array) {
    $temp = 0;
    foreach($array as $value) {
        if($temp < $value) {
            $temp = $value;
        }
    }
    return $temp;
}

function removeDupes($array) {
    return array_unique($array);
}

function distribute($array) {
   $holdKeys = removeDupes($array);
   $holdValues = array();
   $count = 0;
   foreach ($holdKeys as $value) {
       foreach ($array as $item) {
           if($value == $item) {
              $count++;
           }
       }
       $holdValues[] = $count;
       $count = 0;
   }

   $associative = array_combine($holdKeys, $holdValues);
   ksort($associative);
   return $associative;
}