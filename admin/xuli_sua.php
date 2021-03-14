<?php

    $idkh = $_POST['idkh'];
    $Ten = $_POST['tencuaban'];
    $ho = $_POST['ho'] ;
    $email = $_POST['email'];
    $phone = $_POST['phone'] ;
    $dob = $_POST['dob'] ;
    $sexual = $_POST['gioitinh'] ;
    $diachi =  $_POST['diachi'] ;
    $quocgia = $_POST['quocgia'] ;
    $tinh = $_POST['tinh'] ;
    $quan =  $_POST['quan'];
    $phuong =  $_POST['phuong'] ;

    $conn = mysqli_connect('localhost','root','','loginsystem');
    $query = "UPDATE tbl_khachhang SET IDKH = '$idkh', Ho = '$ho', Ten= '$Ten' , Email = '$email', phoneNumber = '$phone', NgaySinh= '$dob', GioiTinh = '$sexual', diaChi= '$diachi', QuocGia = '$quocgia', Tinh = '$tinh', Quan = '$quan', Phuong = '$phuong' WHERE IDKH = '$idkh'";
    $result = mysqli_query($conn, $query);
    if($result){
    header('location: admin.php');
    }

?>