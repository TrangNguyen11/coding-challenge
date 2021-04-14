<?php 
function groupByOwners($arr){
    $result = [];
    foreach($arr as $key => $value){
        if(!array_key_exists($value, $result)){
            $result[$value] = [];
        }
        array_push($result[$value], $key);
    }
    return $result;
}

$arr = ["Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt" => "Randy"];
$kq = groupByOwners($arr);

var_dump($kq);
