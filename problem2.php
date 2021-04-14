<?php

function unique_names($arr1, $arr2){
    $result = [];
    foreach($arr1 as $key => $value){
        $result[$value] = $key;
    }
    foreach($arr2 as $key => $value){
        $result[$value] = $key;
    }

    return array_keys($result);
}

$arr1 = ['Ava', 'Emma', 'Olivia'];
$arr2 = ['Olivia', 'Sophia', 'Emma'];
//['Emma', 'Olivia', 'Ava', 'Sophia'];
$result = unique_names($arr1, $arr2);
var_dump($result);
