<?php

$months = 24; //mėnesiai
$car_price_new = 30000; //Eurų
$car_price = $car_price_new; // (% nuo esamos vertės per mėnesį)

for ($months = 0; $months <= 24; $months++){
     $car_price -= round($car_price * 0.02, 2);
    $depreciated = 100-(($car_price * 100) / $car_price_new);

}
$text = "Po 24 menesiu, masinos verte bus $car_price eur.<br> Nuvertejo $depreciated %";

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
