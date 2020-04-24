<?php

function printArr(array $input){
    foreach($input as $n){
        echo($n . "<br>");
    }
}

function largest(array $input){
    $largest = 0;
    foreach($input as $n){
        if($n > $largest){
            $largest = $n;
        }
    }
    echo ("largest: " . $largest);
}
