<?php

$arr = [
    'kiausiniai' => [
        'name' => 'Kiausinis',
        'amount' => 2,
        'size' => 'didelis'
    ],
    'baklazanas' => [
        'name' => 'Baklazanas',
        'amount' => 1,
        'size' => 'mazas'
        ],
    'grietine' => [
        'name' => 'Grietine',
        'amount' => 1,
        'size' => 'didelis'
    ]
];

print $arr['grietine']['amount'];
var_dump ($arr);

?>
<html>
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
</html>
