<?php
       $conn = mysqli_connect('localhost','root','','loginsystem');
       if($conn)echo "hello";
       $idDH =  $_POST["IDDH"] ;
       $TenMH = isset($_POST["TenMH"]) ? $_POST["TenMH"] : die("Tên mặt hàng không được để trống!");
       $GiaMH = isset($_POST["GiaMH"]) ? $_POST["GiaMH"] : die("Giá mặt hàng không được để trống!");
       $weight = isset($_POST["weight"]) ? $_POST["weight"] : die("Cân nặng không được để trống!");
       $shipprice = isset($_POST["shipprice"]) ? $_POST["shipprice"] : die("Phí vận chuyển không được để trống!");
       $idKH = isset($_POST["idKH"]) ? $_POST["idKH"] : die("Mã khách hàng không được để trống!");
       $payment =  $_POST["payment"]; 
       $query = "INSERT INTO tbl_donhang(idDH,TenMH,GiaMH,KhoiLuong,shipprice,payment,idKH) VALUES('$idDH','$TenMH','$GiaMH','$weight','$shipprice','$payment','$idKH')";
       $result = mysqli_query($conn,$query);
       header('location: http://localhost/Donhang/admin/admin.php#');
?>
