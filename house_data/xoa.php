<?php
    require('ketnoidatabase.php');
    $id = (int) $_GET['id'];
    $img = "SELECT img FROM `house` WHERE `house`.`id` = '$id'";
    $query = mysqli_query($conn, $img);
    $after = mysqli_fetch_array($query);
    $sql = "SELECT * FROM `house` WHERE `house`.`id` = '$id'";

    //Xóa file img
    if(file_exists("./img/".$after['img'])){
        unlink("./img".$after['img']);
    }
    $sql = "DELETE FROM `house` WHERE `house`.`id` = $id";
    mysqli_query($conn, $sql);
    header("Location:trangchu.php");
?>