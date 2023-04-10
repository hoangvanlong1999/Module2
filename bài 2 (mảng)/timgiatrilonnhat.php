<?php
    $a = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    $max = $a[0][0];
    foreach ($a as $key){
        foreach ($key as $key1){
            if ($key1 > $max) {
                $max = $key1;
            } 
        }
    }
    echo $max;