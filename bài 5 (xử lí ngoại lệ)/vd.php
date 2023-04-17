<?php
    $duong = 'dep';
    try {
        if ($duong == 'xau'){
            throw new Exception("di vong 1");
        }
        echo "di thang";
    }
    catch (Exception $e){
        echo $e->getMessage();
    }
    finally {
        echo '<br> ve nha';
    }