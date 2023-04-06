

<!-- <style>
    .item{
        background-color: blanchedalmond;
            width: 500px;
            border: 1px solid #ccc;
            margin: 25px;
            padding: 10px;
            float: left;
    }
</style> -->
<form action="" method="post" class="item">
    <h1>Từ Điển Anh - Việt</h1>
    <input type="text" name="tunhapvao" id="">
    <input type="submit" value="Tra Cứu">  
</form>


<?php
    $tudien = [
        "hello" => "xin chào",
        "how" => "thế nào", 
        "book" => "quyển vở", 
        "computer" => "máy tính"
    ];
    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        $tucantra = $_REQUEST['tunhapvao'];
        $dem = 0;
        foreach ($tudien as $key => $giatri){
            if ($tucantra == $key){
                echo 'từ '.$key.'<br> có nghĩa là :'.$giatri;
                $dem = 1;
            }
        }
        if ($dem == 0){
            echo 'Xinh Lỗi!!!từ này không nằm trong từ điển.';
        }
    }

?>