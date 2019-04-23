<?php 

$kates = rand(1, 3);
$sunys = rand(1, 3);

$katasuniai = 0;

for ($k = 1; $k <= $kates; $k++) {
    for ($s = 1; $s <= $sunys; $s++) {
        $success = rand(0,1);
        if ($success) {
            $katasuniai++;
            break;
        }
    }
}

$text = "Event'e dalyvavo $kates kates ir $sunys sunys.<br>"
        . "Katasuniu iseiga: $katasuniai";
?>
<html>
    <head>
        <title>main</title>
    </head>
    <body>
        <P>
           <?php print $text ;?>
        </P>
    </body>
</html>

