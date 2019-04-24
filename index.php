<?php

$days = 0;
$grikiu_pradzia = 5000;
for ($grikiai = $grikiu_pradzia ; $grikiai>0; $grikiai -= rand(200, 500)) {
       $days++;
}
    
    $date = date('Y-M-d', strtotime("+$days days"));
 $text = "jei turesiu $grikiu_pradzia g. grikiu, galesiu juos valgyti $days dienu. jei pradesiu siandien, grikiai pasibaigs $date.";
?>

<html>
    <head>
        <title>asdv</title>
    </head>
    <body>
        <p>
             <?php print $text;?>
        </p>
    </body>
</html>
