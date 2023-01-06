<?php
    include './admin/connect.php';
    if(isset($_POST['username'])){
        $name =$_POST['username'];
        $email= $_POST['email'];
        $password= $_POST['pass'];
        
        
     
        if(empty($err)){
            $pass =password_hash($password,PASSWORD_DEFAULT);
            var_dump($pass);
            $sql= "INSERT INTO  users(username, email ,password) VALUES ('$name', '$email', '$pass')";
            $query = mysqli_query($conn,$sql);
            if($query){
                header('location: login.php');
            }
        }
    }
?>



<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="./register.css">
    <link rel="stylesheet" href="./base.css">
</head>
<body>

    <form class="register" method="post" action="" class="form">
        <div class="form-title">
            <h2 class="form-title-register">Đăng ký</h2>
            <h2 class="form-title-login"><a href="./login.php">Đăng nhập</a></h2>
        </div>
        <div class="form-username">
            Tên đăng nhập: <br>
            <input class="form-username-input" type="text" name="username" value="" required>
            <p class="form-username-message"></p>
        </div>
        <div class="form-password">
            Mặt khẩu: <br>
            <input class="form-password-input" type="password" name="pass" value="" required/>
            <p class="form-password-message"></p>
        </div>
        <div class="form-password">
            Nhập lại mật khẩu: <br>
            <input class="form-password-input" type="password" name="" value="" required/>
            <p class="form-password-message"></p>
        </div>

        <div class="form-email">
            Email: <br>
            <input class="form-email-input" type="email" name="email" value="" required/>
            <p class="form-email-message"></p>
        </div>
        <div class="form-phone">
            Số điện thoại: <br>
            <input class="form-phone-input" type="text" name="phone" value="" required/>
            <p class="form-phone-message"></p>
        </div>

        <input class="form-submit" type="submit" name="dangky" value="Đăng Ký"/>
    </form>


</body>

</html>