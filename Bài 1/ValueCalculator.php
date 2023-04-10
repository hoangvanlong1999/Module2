
<style>
        .item{
            background-color: blanchedalmond;
            width: 500px;
            border: 1px solid #ccc;
            margin: 25px;
            padding: 10px;
            float: left;
        }
</style>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $luongtien = $_REQUEST['luongtien'];
        $laisuat = $_REQUEST['laisuatnam'];
        $sonam = $_REQUEST['sonamdautu'];

        echo $luongtien.'<br>';
        echo $laisuat.'<br>';
        echo $sonam.'<br>';
        
        $giatrituonglai = $luongtien * (1 + $laisuat*0.01)^$sonam;
        echo 'Số tiền được nhận sau '.$sonam.'năm là : '.$giatrituonglai;
    }
?>




<form class="item" action="" method="post">
        <label for="luongtien">Lượng Tiền Đầu Tư Ban Đầu</label> <br>
        <input type="text" name="luongtien" id=""> <br>

        <label for="laisuatnam">Lãi suất năm</label><br>
        <input type="text" name="laisuatnam" id=""><br>

        <label for="sonamdautu">Số Năm Đầu Tư</label><br>
        <input type="text" name="sonamdautu" id=""><br> <br>

        <input type="submit" value="KIểm TRa">
</form>