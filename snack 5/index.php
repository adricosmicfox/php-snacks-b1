<!-- Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$class = [

    [
        'name' => 'Giangiauro',
        'lastName' => 'Mela',
        'voti' => [3, 6, 8, 5, 3, 5]
    ],

    [
        'name' => 'Paolillo',
        'lastName' => 'Polletto',
        'voti' => [4, 6, 9, 2, 7, 8]
    ],

    [
        'name' => 'Francescollo',
        'lastName' => 'Lollo',
        'voti' => [1, 2, 3, 4, 5, 6]
    ],

    [
        'name' => 'Martilla',
        'lastName' => 'Mirtilla',
        'voti' => [9, 8, 7, 6, 5, 4]
    ],

    [
        'name' => 'Adrandado',
        'lastName' => 'Mangiabrodo',
        'voti' => [1, 2, 1, 2, 1, 2]
    ],

    [
        'name' => 'Marcelletto',
        'lastName' => 'Fungoletto',
        'voti' => [10, 8, 5, 10, 5, 5]
    ],
];



for ($i = 0; $i < count($class); $i++) {
    $mediaVoti = 0;
    for ($j = 0; $j < count($class[$i]["voti"]); $j++) {
        $mediaVoti = $mediaVoti + $class[$i]["voti"][$j];
    }

    echo $class[$i]["name"] . " ";
    echo $class[$i]["lastName"] . " ";
    echo $mediaVoti / (count($class[$i]["voti"])) . "<br>";
}



?>