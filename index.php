<?php

$gerimai = [
    [
        'name' => 'Vilkmerges alus',
        'kaina' => 4.50,
        'nuolaida' => 0
    ],
    [
        'name' => 'Stumbro degtine',
        'kaina' => 8.50,
        'nuolaida' => 10
    ],
    [
        'name' => 'Svyturio alus',
        'kaina' => 3.50,
        'nuolaida' => 15
    ],
    [
        'name' => 'Zemaitijos pienas',
        'kaina' => 1.50,
        'nuolaida' => 30
    ],
];

foreach ($gerimai as $index => &$gerimas) {
    if ($gerimas['nuolaida'] > 0) {
        $gerimas['css_class'] = 'big_font';
//        $kaina_su_nuolaida = round($gerimas['kaina'] * (100 - $gerimas['nuolaida']) / 100);
//        $gerimai[$index]['kaina_su_nuolaida'] = $kaina_su_nuolaida;
    } else {
        $gerimas['css_class'] = 'small_font';
    }
}

var_dump($gerimai);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Gerimai</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            .big_font {
                font-size: 50px;
            }
            
            .big_font .kaina {
                text-decoration: line-through;
            }
        </style>
    </head>
    <body>
        <ul>
            <?php foreach ($gerimai as $gerimas): ?>
                <li class="<?php print $gerimas['css_class']; ?>">
                    <span><?php print $gerimas['name']; ?></span>
                    <?php if (isset($gerimas['kaina_su_nuolaida'])): ?>
                        <span><?php print $gerimas['kaina_su_nuolaida']; ?></span>
                    <?php endif; ?>
                    <span class="kaina"><?php print $gerimas['kaina']; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>





