<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $chuoi = $_REQUEST['nhap'];
        $kitu = $_REQUEST['kitu'];
        $n = 0 ;
        foreach (str_split($chuoi) as $kt){
            if ($kt == $kitu){
                $n++;
            }
        }
        echo 'Số lần xuất hiện của '.$kitu.' là : '.$n ;
    }

?>
<form method="post" action="">
    <label for="">Nhập chuỗi</label> <br>
    <input type="text" name="nhap" id=""> <br>
    <label for="">Nhập ký tự cần tra</label><br>
    <input type="text" name="kitu" id=""> <br>
    <input type="submit" value="kiểm tra">
</form>
