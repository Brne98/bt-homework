<?php

echo "<h1>Zadatak 2</h1><hr>";

$array=[1, 2, 3, 14, -4, 11];

function result($array,$operator="+"){

    if($operator==="+"){
        $result=0;
        foreach($array as $key=>$element){
            $result+=$element;
        }
        echo "Zbir elemenata niza je: " . $result;
    } elseif ($operator==="-"){
        $result=0;
        foreach($array as $key=>$element){
            $result-=$element;
        }
        echo "Razlika elemenata niza je: " . $result;
    } elseif ($operator==="*"){
        $result=1;
        foreach($array as $key=>$element){
            $result*=$element;
        }
        echo "Proizvod elemenata niza je: " . $result;
    } elseif ($operator==="/"){
        $result=1;
        foreach($array as $key=>$element){
            $result/=$element;
        }
        echo "Kolicnik elemenata niza je: " . $result;
    } else {
        echo "Niste uneli dobar operator(sabiranje,razlika,mnozenje i deljenje)";
    }
    
}

result($array);
echo "<br>";
result($array,"-");
echo "<br>";
result($array,"*");
echo "<br>";
result($array,"/");
echo "<br>";


?>