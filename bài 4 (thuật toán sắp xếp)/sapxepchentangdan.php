<?php
    $arr = [1,2,3,4,6,4,1,8,9,10,55,99];
    $n = count($arr);
    for ($i=0;$i<$n;$i++){
        $vitri = $i;
        $giatri = $arr[$i];
        while ($vitri>0 && ($arr[$vitri-1]>$giatri)){
            $arr[$vitri]= $arr[$vitri-1];
            $vitri = $vitri -1;
        }
        $arr[$vitri]=$giatri;
    }

    echo '<pre>';
    print_r($arr);
    echo '</pre>';