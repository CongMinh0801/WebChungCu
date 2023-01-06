<?php
    require("ketnoidatabase.php");
    $sql = "SELECT * FROM `house`";
    $query = mysqli_query($conn,$sql);
    
    session_start();
    if(isset($_SESSION['username'])){
        $username=$_SESSION['username'];
    }else{
        $username='Warning';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/home_page.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/recruit.css">
    <link rel="stylesheet" href="./assets/css/product_page.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/responesive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Căn hộ đẹp</title>
</head>
<body>
    <div class="header">
        <div class="header__navbar">
            <div class="header__navbar-list">
                <div class="header__navbar-list-item">
                    <a href="./home_page.php" id="home" class="header__navbar-list-item-link">Trang chủ</a>
                </div>
                <div class="header__navbar-list-item">
                    <a href="./home_page.php#aboutus" class="header__navbar-list-item-link">Về chúng tôi</a>
                </div>
                <div class="header__navbar-list-item  have-list">
                    <a href="./product_page.php#categories" class="header__navbar-list-item-link">Loại nhà
                        <i class="header__navbar-list-item-link-icon fa-solid fa-chevron-down"></i>
                    </a>

                    <ul class="category-list">
                        <li class="category-list-item"><a href="./product_page.php#sell" class="category-list-item-link">Nhà bán</a></li>
                        <li class="category-list-item"><a href="./product_page.php#rent" class="category-list-item-link">Nhà cho thuê</a></li>
                        <li class="category-list-item"><a href="./product_page.php#categories" class="category-list-item-link">Tất cả</a></li>
                    </ul>
                </div>
                <div class="header__navbar-list-item">
                    <a href="#contact" class="header__navbar-list-item-link">Liên lạc</a>
                </div>
                <div class="header__navbar-list-item">
                    <a href="./recruit_page.php" class="header__navbar-list-item-link">Tuyển dụng</a>
                </div>
            </div>

            <div class="header__navbar-user">
            
                <button class="header__navbar-user-login-btn btn">
                    <a class="header__navbar-user-login-btn-link" href="./login_register/login.php">Đăng nhập/Đăng ký</a>
                </button>


                <div class="header__navbar-user-block">
                    <img src="./assets/img/user-img.png" alt="" class="header__nabar-user-block-img">
                    <p for="" class="header__navbar-user-block-name">
                        <div class="header__navbar-user-profile">
                            <button class="header__navbar-user-profile-item"><a href="">Thông tin</a></button>
                            <button id="logout-button" class="header__navbar-user-profile-item">
                                <a href="./login_register/logout.php">Đăng xuất</a>
                            </button id="logout-btn">
                        </div>
                    </p>
                </div>

                

                <div class="header__navbar-user-add">
                    <a href="./house_data/them.php">
                        <button class="header__navbar-user-add-btn btn">
                            <i class="header__navbar-user-add-btn-icon fa-solid fa-plus"></i>
                            Thêm nhà
                        </button>
                    </a>
                </div>
            </div>
        </div>

<script language="javascript">
    
    document.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 160 || document.documentElement.scrollTop > 160) {
            document.querySelector(".header__navbar").setAttribute("style","background-color: rgb(13, 110, 253); height: 100px; transition: all linear 0.3s;");
            document.querySelector(".header__navbar-list").setAttribute("style","line-height: 100px; transition: all linear 0.3s;");
            document.querySelector(".category-list").setAttribute("style","top: 100px; transition: all linear 0.3s;");
            document.querySelector(".header__navbar-user-profile").setAttribute("style","top: 92px; transition: all linear 0.3s;");
        } else {
            document.querySelector(".header__navbar").setAttribute("style","background-color: rgba(13, 110, 253, 0.85); transition: all linear 0.3s;");
            document.querySelector(".header__navbar-list").setAttribute("style","line-height: 78px; transition: all linear 0.3s;");
            document.querySelector(".category-list").setAttribute("style","top: 78px; transition: all linear 0.3s;");
            document.querySelector(".header__navbar-user-profile").setAttribute("style","top: 80px; transition: all linear 0.3s;");
        }
    }
    
    function load_user() {
        var username = <?php echo json_encode($username);?>;
        if(username.indexOf("Warning")==-1) {
            document.querySelector(".header__navbar-user-login-btn").setAttribute("style","display:none;");
            document.querySelector(".header__navbar-user-block-name").innerText = username;
            if(username.indexOf("admin")==-1){
                document.querySelector(".header__navbar-user-add").setAttribute("style","display:none;");
            }
        } else {
            document.querySelector(".header__navbar-user-add").setAttribute("style","display:none;");
            document.querySelector(".header__navbar-user-block").setAttribute("style","display:none;");
        }
    }
    load_user();

</script>