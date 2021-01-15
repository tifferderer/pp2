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