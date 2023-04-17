<?php
    $a = 'a@gmail.com';
    $b = '@gmail.com';
    $c = 'ab@gmail.';
    function kiemtraemail($email){
        $ham = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
        if (preg_match($ham,$email)){
            echo 'email hop le';
        }else {
            echo 'email khong hop le';
        }
    }
    kiemtraemail($a);
    echo '<br>';
    kiemtraemail($b);
    echo '<br>';
    kiemtraemail($c);
