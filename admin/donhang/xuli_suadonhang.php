<?php
    $iddh = $_POST['iddh'];
    $TenMH = $_POST['TenMH'];
    $GiaMH = $_POST['GiaMH'] ;
    $KhoiLuong = $_POST['KhoiLuong'];
    $shipprice = $_POST['shipprice'] ;
    $payment = $_POST['payment'] ;
    $idKH =  $_POST['idKH'] ;

    $conn = mysqli_connect('localhost','root','','loginsystem');
    $query = "UPDATE tbl_donhang SET IDDH = '$iddh', TenMH = '$TenMH', GiaMH= '$GiaMH' , KhoiLuong = '$KhoiLuong', shipprice = '$shipprice', payment= '$payment', idKH = '$idKH'";
    $result = mysqli_query($conn, $query);
    header('location: http://localhost/Donhang/admin/admin.php');
?>