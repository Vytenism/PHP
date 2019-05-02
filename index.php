<?php

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

var_dump(slot_run(rand(1, 5)));