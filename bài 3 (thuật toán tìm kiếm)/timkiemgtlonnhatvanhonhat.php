<?php 
    $a = [10, 9, 8, 7, 6];

    function nhonhat($arr) {
        $trai = 0;
        $phai = count($arr) - 1;
        $min = $arr[$trai];
    
        while ($trai <= $phai) {
            $giua = floor(($trai + $phai) / 2);
            if ($arr[$giua] < $min) {
                $min = $arr[$giua];
            }
            if ($giua > 0 && $arr[($giua - 1)] < $min) {
                $phai = ($giua - 1);
            } else if ($giua < count($arr) - 1 && $arr[($giua + 1)] < $min) {
                $trai = ($giua + 1);
            } else {
                break;
            }
        }
        return $min;
    }
    
    
    function lonnhat($arr){
        $trai = 0;
        $phai = count($arr) - 1;
        while ($trai <= $phai){
            $giua = floor(($trai + $phai) / 2);
            $max = $arr[$giua];
            if (($giua-1 > 0) && ($arr[($giua-1)] > $max)){
                $phai = ($giua-1);
            }else if($arr[($giua+1)] > $max) {
                $trai = ($giua+1);
            }else {
        
        return $max;
            }
        }
    }
    echo 'Giá Trị Nhỏ Nhất Là :'.nhonhat($a);
    echo '<br>';
    echo 'Giá Trị Lớn Nhất Là :'.lonnhat($a);

