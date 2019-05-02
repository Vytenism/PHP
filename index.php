<?php

function slot_run(){
    $square = [];
    $y = rand(3, 5);
    
    for($x = 1; $x <= $y; $x++){
        $row = [];
        
        for($z = 1; $z <=$y; $z++){ 
            $row[] = rand(0, 1);
        }
        $square[]=$row;   
    }
    return $square;
}

var_dump(slot_run());