<?php
    
    $kq = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['sothu1'], $_POST['sothu2'], $_POST['pheptinh'])){
        $sothu1 = trim($_POST['sothu1']);
            $sothu2 = trim($_POST['sothu2']);
            $pheptinh = $_POST['pheptinh'];
            if (is_numeric($sothu1) && is_numeric($sothu2)){
                switch ($pheptinh){
                    case '+' :
                        $kq = $sothu1 + $sothu2;
                        echo $kq ;
                        break;
                    case '-' :
                        $kq = $sothu1 - $sothu2;  
                        break;
                    case '*' :
                        $kq = $sothu1 * $sothu2;  
                        break;
                    case '/' :
                        if ($sothu2 == 0){
                            $kq = 'Phép tính chia thì số chia phải khác 0';
                        } else {
                            $kq = $sothu1 / $sothu2;      
                        }
                            
            }
        } else {
            $kq = 'Vui lòng không nhập chữ vào ô!';
        }

    }
}
?> 

<style>
    .item {
        width: 800px;
        text-align: center;
        background-color: aqua ;
    }
</style>

<form method="post" action="" class='item'>
    <label for="">Nhập số thứ 1</label><br>
    <input type="text" name="sothu1" id=""> <br>

    <label for="">Số thứ 2</label><br>
    <input type="text" name="sothu2" id=""><br>

    <label for="">Phép Tính</label><br>
    <select name="pheptinh" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">x</option>
            <option value="/">/</option>
    </select> <br>

    <input type="submit" value="TÍnh"> <br><br>
    <?php echo $kq ; ?>

</form>
