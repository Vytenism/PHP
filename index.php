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
foreach($ataskaita as $index => $irasas){

    if($irasas['amount']>0){
        $ataskaita[$index]['css_class']='positive';
    } else {
        $ataskaita[$index]['css_class']='negative';
    }
    
}

           
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
    </body>
</html>
