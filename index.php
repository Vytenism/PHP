<?php

$ataskaita = [
    [
        'name' => 'IKI Darbo Uzmokesits',
        'amount' => 600
        
    ],
    [
        'name' => 'Kalvariju Nacnykas',
        'amount' => -15
        
        
    ],
    [
        'name' => 'Europos prekybos centras',
        'amount' => -200
    ],
    [
        'name' => 'Kartingai',
        'amount' => -120
    ]
];
$balansas = 0;
$visos_islaidos = 0;
$visos_iplaukos = 0;
foreach ($ataskaita as $index => $irasas) {
    if ($irasas['amount'] > 0) {
        $visos_iplaukos += $irasas['amount'];
        $ataskaita[$index]['css_class'] = 'positive';
    } else {
        $visos_islaidos -= $irasas['amount'];
        $ataskaita[$index]['css_class'] = 'negative';
    }
    $balansas += $irasas['amount'];
}

$text = "balanas :$balansas eur.";
$text2 = "visos iplaukos yra :$visos_iplaukos eur.";        
$text3 = "visos islaidos yra:$visos_islaidos eur.";           
?>

<html>
    <head>
        <title>arrays</title>
        <style>
            .positive {
                color: red;
            }
            .negative {
                color: green;
            }
        </style>
    </head>
    <body>
        <ul>
            <?php foreach($ataskaita as $irasas):?> 
            <li class="<?php print $irasas['css_class'] ;?>">
                    <span><?php print $irasas['name'];?></span>
                    <span><?php print $irasas['amount'];?></span>
                </li>
            <?php endforeach;?>
        </ul>
        <ul>
            <li><?php print $text; ?></li>
            <li><?php print $text2; ?></li>
            <li><?php print $text3; ?></li>
        </ul>
     </body>
</html>
