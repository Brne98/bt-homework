<?php

echo "<h1>Drugi zadatak</h1><hr>";

$data = [
    [
        'name' => "Pera",
        'last_name' => "Peric",
        'age' => 28,
        'gender' => 'male',
        'avg_rating' => 7.5,
        'married' => false,
        'courses' => ['laravel', 'react', 'jQuery']
    ],
    [
        'name' => "Jovan",
        'last_name' => "Jovanovic",
        'age' => 23,
        'gender' => 'male',
        'avg_rating' => 7.3,
        'married' => false,
        'courses' => ['laravel', 'php', 'bootstrap']
    ],
    [
        'name' => "Ivan",
        'last_name' => "Ivanovic",
        'age' => 32,
        'gender' => 'male',
        'avg_rating' => 8.2,
        'married' => true,
        'courses' => ['laravel', 'react', 'javascript']
    ],
    [
        'name' => "Mikica",
        'last_name' => "Jovic",
        'age' => 24,
        'gender' => 'male',
        'avg_rating' => 6.5,
        'married' => false,
        'courses' => ['html', 'css', 'bootstrap']
    ],
    [
        'name' => "Marija",
        'last_name' => "Nedeljkovic",
        'age' => 28,
        'gender' => 'female',
        'avg_rating' => 8.1,
        'married' => false,
        'courses' => ['C', 'C++', 'C#']
    ]
                    
];

foreach($data as $array){
    foreach($array as $key=>$element){
}
if($array['married']===true && $array['gender']==='male'){
    $merried = "jeste ozenjen.";
} elseif ($array['married']===false && $array['gender']==='male') {
    $merried = "nije ozenjen.";
} elseif ($array['married']===true && $array['gender']==='female') {
    $merried = "jeste udata.";
} else {
    $merried = "nije udata.";
}

$courses=implode(", ",$array['courses']);
echo $array['name'] . " " . $array['last_name'] . " ima " . $array['age'] . " godina i " . $merried . " Ima prosecnu ocenu " . $array['avg_rating'] . ", a kurseve koje trenutno slusa su: " . $courses . "<br><br>";
}


//Pera Peric ima 28 godina i nije ozenjen. Ima prosecnu ocenu 7.5, a kurseve koje trenutno slusa su: Laravel, PHP, jQuery.


?>