<?php




if ($_SERVER['REQUEST_METHOD']== 'POST'){
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';

    echo '<br>'.$_REQUEST['username'];
    echo '<br>'.$_REQUEST['email'];
    echo '<br>'.$_REQUEST['password'];

    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if ($username == 'admin' && $password =='123' ){
        echo '<br> chào mừng admin';
    }else {echo '<br> tài khoản không tồn tại';
    }


}
?>
<form action="" method="post">
    username: <input type="text" name="username"> <br>
    email: <input type="email" name="email"> <br>
    password: <input type="password" name="password"> <br>
    <input type="submit" value="Gui">
</form>