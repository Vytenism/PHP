<?php

$car_price_new = 30000; //Eurų
$car_price = $car_price_new; // (% nuo esamos vertės per mėnesį)
$santaupos = 15000;

for ($m = 0; $car_price >= $santaupos; $m++){
    $car_price -= round($car_price*0.02);    
    print "Car price at $m = $car_price<br>";
} 

$likutis = $santaupos - $car_price;
$text = "Po $m menesiu, masinos verte bus $car_price. nusipirkus tau dar liks $likutis eur."

?>
<html>
    <head>
        <title>asdv</title>
    </head>
    <body>
        <p>
           <?php print $text; ?> 
        </p>
    </body>
</html>
