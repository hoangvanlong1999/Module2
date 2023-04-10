<?php
$kq= 0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    $sothu1 = $_REQUEST['sothu1'];
    $pheptinh = $_REQUEST['pheptinh'];
    $sothu2 = $_REQUEST['sothu2'];

    
    switch ($pheptinh){
        case '+':
            $kq = $sothu1 + $sothu2;
            break;
        case '-':
            $kq = $sothu1 - $sothu2;
            break;
        
        case '*':
            $kq = $sothu1 * $sothu2;
            break;
        break;
            
        case '/':
            if ($sothu2 == 0 ){
                $kq = 'Không thực hiện được phép tính';
            }else {
                $kq = $sothu1 / $sothu2; 
            }   
            break;
        
    }
    
}    

?>

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

<form method="post" action="" class="item">
    <label for="">Nhập Số Thứ Nhất</label><br>
    <input type="text" name="sothu1" id=""><br> <br>


    <label for="">Nhập Phép Tính</label>
    <select name="pheptinh" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select> <br> <br>

    <label for="">Nhập Số Thứ Hai</label> <br>
    <input type="text" name="sothu2" id=""> <br> <br>
    <input type="submit" value="Tính"> <br>
    <p>Kết Quả Là : <?php echo $kq; ?></p>
</form>