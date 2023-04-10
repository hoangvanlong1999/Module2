<?php 
$a =[54,324,6,5,3];
$min = $a[0];
for ($i = 0 ; $i < count($a);$i++){
    if ($a[$i]< $min){
        $min = $a[$i];
    }
}echo $min;