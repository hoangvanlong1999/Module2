<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
        .item1{
            background-color: blanchedalmond;
            width: 500px;
            border: 1px solid #ccc;
            margin: 25px;
            padding: 10px;
            float: left;
        }
    </style>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD']== 'POST'){
            // echo '<pre>';
            // print_r($_REQUEST);
            // echo '</pre>';

            echo '<br>'.$_REQUEST['username'];
            echo '<br>'.$_REQUEST['password'];
            
            $ten = $_REQUEST['username'];
            $mk = $_REQUEST['password'];
            if ($ten == 'admin' && $mk == '123'){
                echo '<br> chao mung admin!';
            }
            
        }    
        // print_r($_SERVER)
    ?>
    <form action="" method="Post" class="item1">
        <h1>Login</h1>
        <label for="username">Username</label><br>
        <input type="text" name="username" id=""><br>
        <label for="password">Password</label><br>
        <input type="text" name="password" id=""><br> <br>
        <input type="submit" value="Sign in">
    </form>
</body>
</html>