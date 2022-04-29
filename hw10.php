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

        // 1. Dve promenljive (imena birate sami) imaju vrednosti 200 i 80. Izracunati i prikazati njihov zbir, proizvod, razliku i kolicnik.
            $a=200;
            $b=80;
            echo "Zbir a + b: " . $a + $b;
            echo "<br>";
            echo "Razlika a - b: " . $a - $b;
            echo "<br>";
            echo "Proizvod a * b: " . $a * $b;
            echo "<br>";
            echo "Kolicnik a / b: " . $a / $b;
            echo "<br>";
            echo "<br>";



        // 2. Postaviti jednu random vrednost od 0 do 6 (int) u jednu promenljivu. Ispisati na ekranu “Danas je …!” u zavisnosti od broja u promenljivoj.
        // Primer ako je br 5 “Danas je petak!”. Mozete racunati 0 kao ponedeljak ili kao nedelju.

            $day= 3;
            if ($day==1){
                echo "Danas je ponedeljak";
            } else if($day==2){
                echo "Danas je utorak";
            } else if($day==3){
                echo "Danas je sreda";
            } else if($day==4){
                echo "Danas je cetvratak";
            } else if($day==5){
                echo "Danas je petak";
            } else if($day==6){
                echo "Danas je subota";
            } else {
                echo "Danas je nedelja";
            }
            //else if na kraju nema potrebe zato sto jedina moguca opcija za varijablu $day je vrednost 0. Tako da je vrednost 0, u mom slucaju nedelja.


            // 3. Postaviti 3 promenljive a, b i c na vrednosti od 1 do 10 po izboru. Izracunati njihov zbir, i prikazati recenicu "Zbir brojeva .., ... i ... je ... ".

            echo "<br>";
            echo "<br>";
            $x= 9;
            $y=1;
            $z=7;
            echo "Zbir brojeva $x, $y i $z je " . $x + $y + $z;
            //Iskoristio sam promenljive x, y i z umesto a, b i c jer sam a i b iskoristio u prvom zadatku.


        ?>



</body>
</html>
