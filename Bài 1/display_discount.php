<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $gianiemyet = $_REQUEST['gianiemyet'];
        $tylechietkhau = $_REQUEST['tylechietkhau'];
        $kq = $gianiemyet * $tylechietkhau *0.1;
        echo 'Số tiền chiết khấu là :'.$kq;
    }
?>