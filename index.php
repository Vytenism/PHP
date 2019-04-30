<?php

$rasinys= [];
$words = [
    'petras', 'lauke', 'ryte', 'prie', 'maxima', 'mate'
];
$rasinio_ilgis = rand(100, 300);
for ($zodziai=0; $zodziai<$rasinio_ilgis; $zodziai++){
    $rand_index = rand(0, count($words)-1);
    $random_word = $words[$rand_index];
    $rasinys[]= $random_word;
}
var_dump($rasinys);
?>
<html>
    <head>
        <title>array</title>
    </head>
    <body>
        <ul>

        </ul>

    </body>
</html>
