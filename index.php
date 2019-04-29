<?php
$atrinkti_zodziai = [];
$words = [
    'petras', 'lauke', 'ryte', 'prie', 'maxima', 'mate'
];

foreach($words as $names){
    $pateko = rand(0, 1);
    
    var_dump("tikrinam zodi: $names ar pateko: $pateko ");
    
    if ($pateko){
        $atrinkti_zodziai[]= $names;
    }
}

?>

<html>
    <head>
        <title>array</title>
    </head>
    <body>
        <ul>
            <?php foreach ($atrinkti_zodziai as $atrinktas_zodis): ?> 
            <li><?php print $atrinktas_zodis; ?></li>
            <?php endforeach ;?>
        </ul>

    </body>
</html>
