<?php

echo "<h1>Zadatak 1</h1><hr>";

$email = ["jovan@gmail.com", "jovanovic@gmail.com", "jovanjovanovic", "itbootcamp@gmail.com", "php@php.net", "php", "it@yahoo.com"];

function email($email){

    $i=0;
    foreach($email as $key=>$element){
        if(str_contains($element, '@')){
        $i++;
        echo $i . ") " . $element . "<br>";
        }
    }

}

email($email);

?>