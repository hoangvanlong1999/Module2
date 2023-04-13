<?php
    $arr = [1,2,3,4,6,4,1,8,9,10,55,99];
    $n = count($arr);
    for ($i=1;$i<$n-1;$i++){
        $min = $i;
        for ($j = $i+1;$j<$n;$j++){
            if ($arr[$j]<$arr[$min]){
                $min = $j;
            }
        }
        if ($min != $i){
            $t = $arr[$min];
            $arr[$min] = $arr[$i];
            $arr[$i]=$t;
        }
    }

    echo '<pre>';
    print_r($arr);
    echo '</pre>';
