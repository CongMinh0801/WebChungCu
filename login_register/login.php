<?php
    include 'admin/connect.php';
    if(isset($_POST['name'])){
        $username= $_POST['name'];
        $password = $_POST['password'];

        $sql ="SELECT * FROM  users WHERE username = '$username'";
        $query= mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query);
        $checkEmail = mysqli_num_rows($query);
        if($checkEmail == 1){
            $checkpass = password_verify($password,$data['password']);
            if($checkpass){
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header('location: ../home_page.php');
            }
            else {
                $error=1;
            }
        }
        else{
            $error=2;
        }
    }
?>



<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="login.css"/> 
<link rel="stylesheet" href="./base.css">
</head> 
<body>
    <form class="login" method="post" action="" class="form">
        <div class="form-title">
            <h2 class="form-title-login">Đăng nhập</h2>
            <h2 class="form-title-register"><a href="./register.php">Đăng ký</a></h2>
        </div>
        <div class="form-username">
                Tên đăng nhập: <br>
            <input class="form-username-input" type="text" name="name" value="" required>
            <span class="user-message">Tên đăng nhập sai</span>
        </div>
        <div class="form-password">
            Mật khẩu: <br>
            <input class="form-password-input" type="password" name="password" value="" required/>
            <span class="password-message">Mật khẩu sai</span>
        </div>

        <input class="form-submit" type="submit" name="dangnhap" value="Đăng Nhập"/>
        
    </form>
</body> 
</html>

<script>
    var error = <?php echo json_encode($error);?>;
    if(error==2){
        document.querySelector(".user-message").setAttribute("style","display:block;");
    }else if(error==1){
        document.querySelector(".password-message").setAttribute("style","display:block;");
    }else {
        document.querySelector(".user-message").setAttribute("style","display:none;");
        document.querySelector(".password-message").setAttribute("style","display:none;");
    }
</script>