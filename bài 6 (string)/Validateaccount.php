<?php
    $b = '12345';
    function ktacc($str){
        $a = '/^[_a-z0-9]{6,}$/';
        if (preg_match($a,$str)){
            echo 'acc hop le';
        }else {
            echo 'acc khong hop le';
        }
    }
    ktacc($b);