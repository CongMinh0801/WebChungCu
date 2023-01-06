<?php
session_start();
unset($_SESSION['username']);
header('location: ../home_page.php');
?>