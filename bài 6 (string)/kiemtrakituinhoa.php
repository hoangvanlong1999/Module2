<?php
    $a = 'nguyen van Nam';
    $b = 'nGUYEN VAN NAM';
    $c = 'Nguyen van Nam';
    function kiemtrakitu($str){
        $regexp = '/^[A-Z]/';
        if (preg_match($regexp,$str)){
            echo 'Hàm có kí tự in hoa';
        } else {
            echo 'Hàm khong có kí tự in hoa';
        }
    }
    kiemtrakitu($a); 
    echo '<br>';
    kiemtrakitu($b);
    echo '<br>';
    kiemtrakitu($c);
