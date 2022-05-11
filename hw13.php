<?php

function PoolSum(){

$a=10;
$b=5;
$r=2.5;

function Pool1($a, $b){
    $area_pool1 = $a * $b + ((pow(($b/2), 2) * pi()) / 2);
    return $area_pool1;
}

echo "Povrsina velikog bazena je: " . Pool1($a,$b) . " m<sup>2</sup><br>";

function Pool2($r){
    $area_pool2 = pow($r,2) * pi();
    return $area_pool2;
}

echo "Povrsina kruznog bazena je: " . Pool2($r) . " m<sup>2</sup><br>";

function Pool3($a, $b){
    $area_pool3 = $a * $b;
    return $area_pool3;
}

echo "Povrsina pravougaonog bazen je: " . Pool3($a, $b) . " m<sup>2</sup><br>";

$area = Pool1($a,$b) + Pool2($r) + Pool3($a,$b);
return $area;

}

echo "Povrsina svih bazena je: " . PoolSum() . " m<sup>2</sup><br>";

?>