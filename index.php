<?php

$pakelio_kaina = 3.75;
$surukyta = 0;
$surukyta2 = 0;
$rukymo_laikas = 5;
$viso = 0;
$div = '';
for ($day = 1; $day <= 365; $day++) {
    $weekday = date('N', strtotime("+$day days"));

    if ($weekday <= 4) {
        $cizos_mon_thu = rand(3, 4); // Nuo pirmadienio iki ketvirtadienio
        $surukyta += $cizos_mon_thu; // Kiek surūkiau iki ketvirtadienio
        $surukyta2 += $cizos_mon_thu; // Kiek surūkiau iki ketvirtadienio
    } elseif ($weekday == 5) {
        $cizos_fri = rand(10, 20); // Penktadienis
        $surukyta += $cizos_fri; // Kiek surukiau per penktadieni
    } else {
        $cizos_sat_sun = rand(1, 3); // Sestadienis-sek
        $surukyta += $cizos_sat_sun; // Kiek surukiau per sest-sek
    }
    $viso = $surukyta * $rukymo_laikas;
//    $div .= "<div class=\"image\"></div>";
}
    for ($n = 0; $n < $surukyta; $n++) {
        $div .= "<div class=\"image\"></div>";
    }
$hours = round($viso / 60); 
$kainuos = round($surukyta / 20 * 3.75);
$kainuos2 = round($surukyta2 / 20 * 3.75);
$text = "Per metus surukysiu $surukyta cigareciu uz $kainuos eur.";
$text2 = "Nerukydamas pirmadieni-ketvirtaideni sutaupyciau $kainuos2 eur.";
$text3 = " praleidau $hours laiko rukydamas";

?>

<html>
    <head>
        <title>main</title>
        <style type="text/css">
            .image {
               background-image: url(https://media.istockphoto.com/photos/cigarette-picture-id488568510?k=6&m=488568510&s=612x612&w=0&h=UYOpNJSkWrkwLBZhffeh_6mRuvmUg8FP5htdF1CDTVk=);
               background-size: cover;
               width: 30px;
               height: 30px;
            }
            
            .cigarete {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: flex-start;
                align-items: stretch;
                align-content: stretch;
            }
            
            img {
            width: 30px;
            height: 30px;
            }
        </style>
    </head>
    <body>
        <P>
            <?php print $text . ' ' . $text2 . ' ' . $text3;?>
        </P>
        <div class="cigarete">
            <?php print $div; ?>
        </div>
   </body>
</html>