<?php

$mano_atmintis = [
    'Penktadienis',
    'Paskaita',
    'Baras',
    'Viskis',
    'Alus',
    'Alus',
    'Alus',
    'Pirmadienis',
    'Paskaita'
];

$draugo_atmintis = [
    'Penktadienis',
    'Rytas',
    'Baras',
    'Viskis',
    'Alus',
    'Degtine',
    'Mieles',
    'Degtine',
    'Samagonas',
    'Antradienis'
];

$flashback_index = rand(0, count($mano_atmintis) - 1);
$flashback_num = $flashback_index + 1;
$flashback_text = "#$flashback_num: {$mano_atmintis[$flashback_index]}";

$bendri_atsiminimai = [];
foreach ($mano_atmintis as $prisiminimas) {
    $egzistuoja = in_array($prisiminimas, $draugo_atmintis);
    if ($egzistuoja) {
        $bendri_atsiminimai[] = $prisiminimas;
    }
}
$atsiminimai = [];
foreach ($mano_atmintis as $prisiminimas) {
    $egzistuoja = in_array($prisiminimas, $draugo_atmintis);
    $duplikuojasi = in_array($prisiminimas, $atsiminimai);
    if ($egzistuoja && !$duplikuojasi){
        $atsiminimai[] = $prisiminimas;
    }
}



//$nesikartojantis = array_unique($bendri_atsiminimai);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PENKTADIENIS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Kas buvo penktadienį ?!</h1>
        <h2>Mano atmintis</h2>
        <ul> 
            <!-- foreach -->
            <?php foreach ($mano_atmintis as $prisiminimas): ?>
                <li> 
                    <?php print $prisiminimas; ?>
                </li>
            <?php endforeach; ?>
            <!-- endforeach -->
        </ul>
        <h3><?php print $flashback_text; ?></h3>               
        <h2>Draugo Atmintis</h2>
        <ul> 
            <!-- foreach -->
            <?php foreach ($draugo_atmintis as $prisiminimas): ?>
                <li> 
                    <?php print $prisiminimas; ?>
                </li>
            <?php endforeach; ?>
            <!-- endforeach -->
        </ul>
        <h3>Sutape prisiminimai:</h3>
        <ul> 
            <!-- foreach -->
            <?php foreach ($bendri_atsiminimai as $prisiminimas): ?>
                <li>
                    <?php print $prisiminimas; ?>
                </li>
            <?php endforeach; ?> 
            <!-- endforeach -->
        </ul>
         <h3>nesikartojantis prisiminimai:</h3>
        <ul> 
            <!-- foreach -->
            <?php foreach ($atsiminimai as $prisiminimas): ?>
                <li>
                    <?php print $prisiminimas; ?>
                </li>
            <?php endforeach; ?> 
            <!-- endforeach -->
        </ul>
    </body>
</html>