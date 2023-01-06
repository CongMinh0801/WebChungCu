<?php
    require("ketnoidatabase.php");
    $sql = "SELECT * FROM `house`";
    $query = mysqli_query($conn,$sql)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function xoa(){
            var conf = confirm(`Bạn có chắc muốn xóa căn hộ này không ?`);
            return conf;
        }
    </script>
</head>
<body>
    <h1>Quản lý danh sách nhà </h1>
        <button>
            <a href="them.php">Thêm nhà</a>
        </button>
        <button>
            <a href="./home_page.php">Về trang chủ</a>
        </button>
        <table id="danhsachmuc">
            <tr>
                <th>Mã id</th>
                <th>Tên nhà</th>
                <th>Giá nhà</th>
                <th>Địa chỉ</th>
                <th>Khu vực</th>
                <th>Loại nhà</th>
                <th>Phòng ngủ</th>
                <th>Phòng tắm</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($query)){

            ?>
            <tr>
                <td><?= $row["id"] ?> </td>
                <td><?= $row["ten"] ?></td>
                <td><?= $row["gia"] ?>&nbsp; VNĐ</td>
                <td><?= $row["address"] ?></td>
                <td><?= $row["choose"] ?></td>
                <td><?= $row["type"] ?></td>
                <td><?= $row["phongngu"] ?></td>
                <td><?= $row["phongtam"] ?></td>
                <td><img style="width: 200px;height: 200px;"  src="./img/<?= $row["img"] ?>" alt=""></td>
                <td><a href="sua.php?id=<?= $row["id"] ?>">Sửa/</a>
                    <a onclick="return xoa()" href="xoa.php?id=<?= $row["id"] ?>">Xóa</a>      
                </td>
            </tr>
            <?php }?>
        </table>
    <style>
        #danhsachmuc{
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            #danhsachmuc td, #danhsachmuc th{
                border: 1px solid #ddd;
                padding: 8px;
            }
            #danhsachmuc tr:nth-child(even){background-color: #f2f2f2;}
            #danhsachmuc tr:hover{background-color: #ddd;}
            #danhsachmuc th{
                padding-top: 12px;
                padding-bottom: 12px;
                text-align:left;
                background-color: #04AA6D;
                color: white;
            }
            button{
                background-color: yellow;
                padding: 8px 16px;
            }button a{
                color: black;
            }
            a{
                text-decoration: none;
            }
    </style>
</body>
</html>