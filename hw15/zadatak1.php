<?php

echo "<h1>Prvi zadatak</h1><hr>";

echo "<b>Pod a:</b><br><br>";

$hwArray = ["Pera", "Milka", "Pera" ,"Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];
if(in_array("Jovan",$hwArray)===false){
    array_push($hwArray, "Jovan");
    print_r($hwArray);
} else{
    print_r($hwArray);
}


echo "<br><br><hr><b>Pod b:</b><br><br>";

if(in_array("Rasa",$hwArray)===false){
    array_splice($hwArray,2 ,0 , "Rasa");
    print_r($hwArray);
} else {
    print_r($hwArray);
} //indeks je 2 ali to je treci u nizu

echo "<br><br><hr><b>Pod c:</b><br><br>";

$count = count($hwArray);
echo "U datom nizu ima " . $count . " ucenika";

echo "<br><br><hr><b>Pod d:</b><br><br>";

if(in_array("Stefan",$hwArray)===false){
array_unshift($hwArray, "Stefan");
print_r($hwArray);
} else {
print_r($hwArray);
}

echo "<br><br><hr><b>Pod e:</b><br><br>";

unset($hwArray[6]);
print_r($hwArray);

echo "<br><br><hr><b>Pod f:</b><br><br>";

print_r(array_unique($hwArray));

echo "<br><br><hr>";

?>