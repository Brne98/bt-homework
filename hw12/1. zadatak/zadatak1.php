<?php

$weight=$_GET['weight'];
$prof=$_GET['prof'];
$age=$_GET['age'];



if($prof=="programer" || $prof=="administrativni radnik" || $prof=="menadzer"){
    $active_factor=100;
} else if($prof=="policajac" || $prof=="vojnik"){
    $active_factor=200;
} else if($prof=="sportista"){
    $active_factor=300;
} else {
    $active_factor=150;
}


if($age>=0 && $age<=3){
    $age_factor=1.9;
} else if($age>=4 && $age<=10){
    $age_factor=1.5;
} else if($age>=11 && $age<=18){
    $age_factor=1.2;
} else if($age>=19 && $age<=26){
    $age_factor=1;
} else if(($age>=27 && $age<=30) || ($age>=50 && $age<=60)){
    $age_factor=0.8;
} else if(($age>=31 && $age<=35) || ($age>=45 && $age<=49)){
    $age_factor=0.7;
} else if(($age>=36 && $age<=44) || ($age>60)){
    $age_factor=0.6;
}

$max_calories= $weight * $active_factor * $age_factor;

echo "Vas maksimalni unos kalorija iznosi: " . $max_calories . "cal";



?>