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

function removeDups(array $input){
    $newArr = array();
    foreach($input as $n){
        if(!in_array($n, $input)){
            array_push($newArr, $n);
        }
    }
    echo($newArr);
}

function distribution(array $input){
    $newArr = array();
    foreach($input as $n => $value){
        if(!in_array($n, $input)){
            $newArr += array($n => 1);
        }
        else{
            $newArr[$n][$value]++;
        }
    }

}