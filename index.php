<?php
$daiktai = ['Kremas','Riestuai','Lupdazis','Kojnes','Raktai'];
$size = rand(1, 20);
$is_dark = rand(0, 1);

$rand_name = rand(0, count($daiktai)-1);

if($is_dark){
    $color = 'tamsus';
} else {
    $color = 'sviesus';
}

$text = "$daiktai[$rand_name] uzima $size cm3. Daiktas $color.";
?>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
        </style>
    </head>
    <body>
        <p><?php print $text ;?></p>
    </body>
</html>






