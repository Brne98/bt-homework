<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $ime = $_GET['ime'];
    $prezime= $_GET['prezime'];
    $lozinka= $_GET['password'];
    $email= $_GET['email'];
    $pol= $_GET['pol'];

    if(empty($ime) || empty($prezime) || empty($lozinka) || empty($email) || empty($pol)){
        echo "ERROR!!!";
    } else{
   


    if(isset($_GET['html'])){
        $lista_kurseva1= $_GET['html'];
    } else{
        $lista_kurseva1=NULL;
    }
    
    if(isset($_GET['css'])){
        $lista_kurseva2= $_GET['css'];
    } else{
        $lista_kurseva2=NULL;
    } 
    
    if(isset($_GET['php'])){
        $lista_kurseva3= $_GET['php'];
    } else{
        $lista_kurseva3=NULL;
    }
    
    if($pol==="Muski"){
        echo "Postovani " . $ime . " " . $prezime;
    } else {
        echo "Postovana " . $ime . " " . $prezime;
    }
    
    echo "<br>";
    echo "Uspesno ste se registrovali na nasem sajtu.";
    echo "<br>";
    echo "Vasa lozinka je: $lozinka ";
    echo "<br>";
    echo "Vas username je: $email";
    echo "<br>";
    echo "Vasi odabrani kursevi su:" . $lista_kurseva1 . " " . $lista_kurseva2 . " " .  $lista_kurseva3 ;
    }


?>
</body>
</html>
