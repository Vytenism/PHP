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
            $row[] = rand(0, 2);
        }
        $square[]=$row;   
    }
    return $square;
}
function winning_slot($matrix){
    $winning_rows = [];
    
    foreach ($matrix as $index => $row){
        $row_winning_sum= count($row);
        $column_sum = 0;
        
        foreach ($row as $column){
            $column_sum += $column ;
        }
        if ($row_winning_sum == $column_sum){
            $winning_rows[] = $index;
        }
        if ($column_sum == 0){
            $winning_rows[] = $index;
        }
    }
    
    return $winning_rows;
}

$size = rand(1, 15);
$array = slot_run($size);
$winning_rows = winning_slot($array);
var_dump ($winning_rows);
?>
<html>
    <head>
        <title>functions</title>
        <link rel="stylesheet" href="style.css"/>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1"/> 
    </head>
    <body>
        <?php foreach ($array as $index => $value): ?>
            <section>
        <?php foreach ($value as $index => $random): ?>
            <?php if ($random<1): ?>
                <div class="blue"></div>
            <?php else: ?>
                <div class="orange"></div>
            <?php endif; ?>
        <?php endforeach; ?>
            </section>
        <?php endforeach; ?>
    </body>
</html>
