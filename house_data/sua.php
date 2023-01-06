<?php
    require('ketnoidatabase.php');
        $id = (int) $_GET['id'];
        $sql = "SELECT * FROM `house` WHERE `house`.`id` = '$id'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        $img =  $row['img'];
        if(isset($_POST['submit'])){
            $id  = $_POST['id'];
            $ten = $_POST['ten'];
            $gia = $_POST['gia'];
            $address = $_POST['address'];
            $khuvuc = $_POST['choose'];
            $loainha = $_POST['type'];
            $phongngu = $_POST['phongngu'];
            $phongtam = $_POST['phongtam'];
            $hinhanh = $_FILES['img']['name'];
    
            $target_dir ="./img/";
            if($hinhanh){
                if(file_exists("./img/".$img)){
                    unlink("./img/".$img);
                }
                $target_file = $target_dir.$hinhanh ;
            }else{
                $target_file = $target_dir.$img ;
                $hinhanh = $img;
            }
            
            if(isset($id) && isset($ten) && isset($gia) && isset($address) && isset($khuvuc) && isset($loainha) && isset($phongngu)&& isset($phongtam) && isset($img)){
                //Lưu hình ảnh vào thư mục tam tmp_name trên server
                move_uploaded_file($_FILES['img']['name'], $target_file);
                //viet cau lenh sqp
                $sql = "UPDATE `house` SET `id` = '$id', `ten` = '$ten',`gia` = '$gia',`address` = '$address',`choose` = '$khuvuc',`type` = '$loainha',`phongngu` = '$phongngu',`phongtam` = '$phongtam',`img` = '$hinhanh' 
                WHERE `house`.`id` = '$id';";
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
    <title>Sửa thông tin</title>
    <link rel="stylesheet" href="./sua.css">
    <link rel="stylesheet" href="../assets/css/base.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        
        <h1 class="form-title">Sửa thông tin </h1>
        <div class="house-id">
            <label for="">Mã id:</label><br>
            <input type="text" id="id" name="id" value="<?= $row["id"]?>"><br>
        </div>
       
    
        <div class="house-name">
            <label for="">Tên nhà:</label><br>
            <input type="text" id="ten" name="ten" value="<?= $row["ten"]?>"><br>
        </div>
        
        <div class="house-price">
            <label for="">Giá nhà:</label><br>
            <input type="text" id="gia" name="gia" value="<?= $row["gia"]?>"><br>
        </div>

        <div class="house-address">
            <label for="">Địa chỉ:</label><br>
            <input type="text" id="address" name="address" value="<?= $row["address"]?>"><br>
        </div>
        
        <div class="jouse-location">
            <label for="">Khu vực:</label><br>
            <Select name="choose">
                <option value="Gần sông">Gần sông</option>
                <option value="Gần siêu thị">Gần siêu thị</option>
                <option value="Gần nhà hàng">Gần nhà hàng</option>
                <option value="Gần mặt đường">Gần mặt đường</option>
        </Select><br>
        </div>

        <div class="house-type">
            <label for="">Loại nhà:</label><br>
            <select name="type">
                <option value="Thuê">Thuê</option>
                <option value="Bán">Bán</option>
        </select><br>

        </div>

        <div class="house-bedroom">
            <label for="">Phòng ngủ:</label><br>
            <input type="text" id="phongngu" name="phongngu" value="<?= $row["phongngu"]?>"><br>
        </div>

        <div class="house-badroom">
            <label for="">Phòng tắm:</label><br>
            <input type="text" id="phongtam" name="phongtam" value="<?= $row["phongtam"]?>"><br>
        </div>

        <div class="house-img">
            <label for="file">Hình ảnh:</label>
            <input type="file" id="file" name="img" value="Choosen file"><br>
        </div>

        <button class="update-btn btn" type="submit" name="submit">
         Cập nhật sản phẩm
        </button>
        <a class="manager__page" href="trangchu.php">Quay về</a>
    </form>
</body>
</html>