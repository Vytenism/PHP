<?php 

$months = 12;
$kisene = 1000;
$alga = 700;


for ($months = 0; $months < 12; $months++) {
    $islaidos = rand(500,900);
    $balansas = $kisene + $alga - $islaidos;
    print "balansas $balansas<br>";
    print "islaidos $islaidos<br>";
    if ($balansas <=0) {
        print '"Bloga prognoze: $months gali baiktis pinigai! Atsargiai!<br>"';
        break;
    } else {
        $kisene = $balansas;
    }
    
    
} 

$text = "likutis $kisene";
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

