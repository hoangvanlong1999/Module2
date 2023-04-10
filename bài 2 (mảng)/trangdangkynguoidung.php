<?php
    $mangthongtin = [];
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $tennguoidung = $_REQUEST['ten'];
        $email = $_REQUEST['email'];
        $sodienthoai = $_REQUEST['dienthoai'];
        $mangthongtin +=  [
            'ten' =>  $tennguoidung,
            'email' => $email,
            'dienthoai' => $sodienthoai
        ];
        print_r($mangthongtin);
    }
?>

<style>
    .item {
        width: 800px;
        text-align: center;
        background-color: aqua ;
    }
</style>


<form action="" class="item" method="post">
    <label for="">Tên Người Dùng</label><br>
    <input type="text" name="ten" id=""><br>


    <label for="">Nhập Email</label> <br>
    <input type="Email" name="email" id=""><br>


    <label for="">Điện THoại</label><br>
    <input type="text" name="dienthoai" id=""><br>


    <input type="submit" value="Tạo" name="tao"> 
</form>