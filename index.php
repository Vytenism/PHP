<?php

//$days = 365;

$pakelio_kaina = 3.40;
$surukyta = 0;

for ($day = 1; $day <= 365; $day++){
   $weekday = date('N', strtotime("+$day days"));

   if ($weekday <= 4){
       $cizos_mon_thu = rand(3, 4); // Nuo pirmadienio iki ketvirtadienio
       $surukyta += $cizos_mon_thu; // Kiek surūkiau iki ketvirtadienio
   } elseif ($weekday == 5){
       $cizos_fri = rand(10, 20);
       $surukyta += $cizos_fri;
   } else {
       $cizos_sat_sun = rand(1, 3);
       $surukyta += $cizos_sat_sun;
   }
}
$kainuos = round($surukyta / 20 * 3.75);
$text = "per metus surukysiu $surukyta cigareciu uz $kainuos eur";

    if ($weekday <= 4){ 
    $kainos = ($cizos_mon_thu * $day) / 20 * 3.75;
    }
    $sutaupysiu = "nerukydamas pirmad-ketvirtadieni sutaupyciau $kainos eur";

?>
<html>
    <head>
        <title>main</title>
    </head>
    <body>
        <P>
           <?php print $text . ' ' . $sutaupysiu ;?>
        </P>
    </body>
</html>