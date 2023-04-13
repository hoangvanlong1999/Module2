<?php
    $arr = [1,2,3,4,6,4,1,8,9,10,55,99];
    $n = count($arr);
    for ($i=0;$i<$n;$i++){
        for ($j=$i+1;$j<$n;$j++){
            if ($arr[$i]>$arr[$j]){
                $t = $arr[$i];
                $arr[$i]=$arr[$j];
                $arr[$j] = $t;
            }
        }
    }
    echo '<pre>';
    print_r($arr);
    echo '</pre>';