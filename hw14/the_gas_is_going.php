<?php



function TGIG($fuel,$fuel_per_route,$fuel_rest_flag=false){
    


if($fuel_rest_flag===false){
    $trucks = $fuel / $fuel_per_route;
    return floor($trucks);
} else if($fuel_rest_flag===true){
    $rest = $fuel % $fuel_per_route;
    return $rest;
}
}

echo TGIG(102,10);

echo "<br><br>";

echo TGIG(102,10,true);

?>