<?php
    include'ketnoidatabase.php';

    if(isset($_POST['submit'])){
        $ten = $_POST['ten'];
        $gia = $_POST['gia'];
        $address = $_POST['address'];
        $khuvuc = $_POST['choose'];
        $loainha = $_POST['type'];
        $phongngu = $_POST['phongngu'];
        $phongtam = $_POST['phongtam'];
        $img = $_FILES['img']['name'];

        //Lay dia chi thu muc hinh anh da tao truoc do
        $target_dir ="./img/";
        //tao duong dan truy cap den file
        $target_file = $target_dir.$img;
        //check cac bien luu tru thong tin- dam bao chung da duoc nhap du lieu
        if(isset($ten) && isset($gia) && isset($address) && isset($khuvuc) && isset($loainha) && isset($phongngu)&& isset($phongtam) && isset($img)){
                //Lưu hình ảnh vào thư mục tam tmp_name trên server
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                //viet cau lenh sqp
                $sql = "INSERT INTO `house`(`ten`, `gia`,`address`, `choose`, `type`, `phongngu`, `phongtam`, `img`) 
                VALUES ('$ten','$gia','$address','$khuvuc', '$loainha','$phongngu','$phongtam','$img') ";
                mysqli_query($conn, $sql);
                header("Location:trangchu.php");
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./them.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <title>Document</title>
</head>
<body>
    <form class="form" action="" method="post" enctype="multipart/form-data">
        <h1 class="form-title">Thêm Nhà</h1>
        <div class="house_name">
            <label for="">Tên nhà</label><br>
            <input type="text" name="ten"><br>
        </div>
        
        <div class="house_price">
            <label for="">Giá nhà</label><br>
            <input type="text" name ="gia"><br>
        </div>

        <div class="house_address" >
            <label for="">Địa chỉ</label><br>
            <input type="text" name ="address"><br>
        </div>
        
        
        <div class="house_location">
            <label for="">Khu vực</label><br>
            <Select name="choose">
                <option value="Gần sông">Gần sông</option>
                <option value="Gần siêu thị">Gần siêu thị</option>
                <option value="Gần nhà hàng">Gần nhà hàng</option>
                <option value="Gần mặt đường">Gần mặt đường</option>
            </Select><br>
        </div>

        <div clas="house_type">
            <label for="">Loại nhà</label><br>
            <select name="type">
                <option value="Thuê">Thuê</option>
                <option value="Bán">Bán</option>
            </select><br>
        </div>

        <div class="house_bedroom">
            <label for="">Phòng ngủ</label><br>
            <input type="text" name ="phongngu"><br>
        </div>

        <div class="house_restroom">
            <label for="">Phòng tắm</label><br>
            <input type="text" name ="phongtam"><br>
        </div>

        <div class="house_img">
            <label for="">Hình ảnh</label><br>
            <input type="file" id="file" name="img" value="Choosen file"><br>
        </div>

        <div class="submit_btn">
            <input type="submit" value="Thêm nhà" name="submit">
        </div>
        <button class="managepage_btn"><a href="http://localhost/Doancuoiky/house_data/trangchu.php">Trang quản lý</a></button>
    </form>

    
</body>
</html>