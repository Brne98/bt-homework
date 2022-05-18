<?php

echo "<h1>Zadatak 3</h1><hr>";

$array=[
    'name' => "Jovan",
    'last_name' => "Jovanovic",
    'age' => 23,
    'gender' => "male",
    'course' => "PHP"
];

function key_search($array,$key){

    if(array_key_exists($key,$array)!=false){
        echo "Trazeni kljuc postoji";
    } else {
        echo "Trazeni kljuc ne postoji";
    }
}

key_search($array,'name');
echo "<br>";
key_search($array,'Jovan');