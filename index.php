<?php

$arr = [
    'section1' => [
        'eggs' => [
            'amount' => [
                'one' => 1,
                'two' => 2,
                'three' => 3
            ],
        ],
        'greek yoghourt',
        'yoghourt' => [
            'amount' => [
                'one' => 1,
                'two' => 2,
            ],    
        ],
        'fish' => 0
    ],
    'section2' => [
        'milk',
        'kefir' => 0,
        'vodka' => [
            'amount' => [
                'one' => 1,
                'two' => 2,
            ]
        ],    
        'Kechup'
    ]
];


var_dump ($arr);

?>

<!--<html>
    <head>
        <title>array</title>
    </head>
    <body>
        <div class="produktas">
            <span class="pavadinimas">
                <?php print $arr['grietine']['name'];?>
            </span>
            <span class="kiekis">
                 <?php print $arr['grietine']['amount'];?>
            </span>
            <span class="dydis">
                 <?php print $arr['grietine']['size'];?>
            </span>
        </div>   
    </body>
</html>-->
