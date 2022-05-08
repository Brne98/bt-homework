<?php

$a=$_GET['wall_width'];
$b=$_GET['wall_height'];
$c=$_GET['tile_width'];
$d=$_GET['tile_height'];

if(is_null($a) || is_null($b) || is_null($c) || is_null($d)){

    echo "Error!!!";

} else if($a==0 || $b==0 || $c==0 || $d==0){
    echo "Error!!! Visina/Sirina zida/plocice ne sme biti 0!";
} else if (empty($a) || empty($b) || empty($c) || empty($d)){
    echo "Unesite sve vrednosti!!!";
} else if(isset($a) && isset($b) && isset($c) && isset($d)){
   
$wall_area= $a * $b;
$tile_area= $c * $d;

$n= $wall_area / $tile_area;
echo "Broj plocica koji je potreban da se popuni ceo zid je: " . $n;
}
?>