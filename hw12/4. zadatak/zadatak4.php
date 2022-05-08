<?php

$snail_speed=3;
$tree_speed=1;
$snail_start=0;
$tree_start=100;
$day=0;


while($snail_start<=$tree_start){
    $day++;
    $snail_start+=$snail_speed;
    $tree_start+=$tree_speed;

    if($snail_start<$tree_start){
    echo "Dan " . $day . ": Puz je presao $snail_start, visina drveta $tree_start";
    echo "<br>";
    }
    //if petlja da ne bih ispisao rezultat takav, da puz lebdi iznad drveta
}

echo "Puz se popeo na drvo za $day dana. "

?>