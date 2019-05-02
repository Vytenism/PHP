<?php

function slot_run(){
    $square = [];
    for($x = 1; $x <= 5; $x++){
        $row = [];
        for($z = 1; $z <=5; $z++){
            $numbers = rand(0, 1);
            $row []= $numbers;
        }
        $square[] = $row;
    }
    return $square;
}

var_dump(slot_run());