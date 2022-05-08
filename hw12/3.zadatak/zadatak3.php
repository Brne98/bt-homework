
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="zadatak3.php" method="Get">
        <label></label>
        <input type="number" name="number">
        <input type="submit" value="Izracunaj">
    </form>
    
<?php


$i = 1;
$sum = 0;
if(isset($_GET['number'])){
$n= $_GET['number'];

    
while($i<=$n){
    $sum += $i;
    $i++;
}
echo "Zbir prvih $n prirodnih brojeva je $sum.";
}

?>
    
   
</body>
</html>

