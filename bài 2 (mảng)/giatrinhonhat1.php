<?php 
$a =[54,324,6,5,2];
$min = $a[0];
for ($i = 0 ; $i < count($a);$i++){
    if ($a[$i]< $min){
        $min = $a[$i];
    }
}echo $min;
