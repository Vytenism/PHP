<?php
/**
 * 
 * Generuoja dinamine matrica
 * @return array matrica
 */
function slot_run($size){
    $square = [];
    
    for($x = 1; $x <= $size; $x++){
        $row = [];
        
        for($z = 1; $z <=$size; $z++){ 
            $row[] = rand(0, 1);
        }
        $square[]=$row;   
    }
    return $square;
}

$size = rand(1, 5);
$array = slot_run($size);

?>

<html>
    <head>
        <title>functions</title>
        <<link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <?php foreach ($array as $index => $value): ?>
    <section>
        <?php foreach ($value as $index => $random): ?>
            <?php if ($random): ?>
                <div class="blue"></div>
            <?php else: ?>
                <div class="orange"></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
        <?php endforeach; ?>
    </body>
</html>
