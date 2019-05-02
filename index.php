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
var_dump(slot_run($size));