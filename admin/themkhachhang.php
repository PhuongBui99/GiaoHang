<?php
    $conn = mysqli_connect('localhost','root','','loginsystem');
    $ho = isset($_POST['ho']) ? $_POST['ho'] : die("Họ không được để trống");
    $ten = isset($_POST['ten']) ? $_POST['ten'] : die("Tên không được để trống");
    $email = isset($_POST['email']) ? $_POST['email'] : die("Email không được để trống");
    $phone = isset($_POST['phone']) ? $_POST['phone'] : die("Phone không được để trống");
    $dob = isset($_POST['dob']) ? $_POST['dob'] : die("Ngày sinh không được để trống");
    $idKH = isset($_POST['idKH']) ? $_POST['idKH'] : die("ID khách hàng không được để trống");
    $sexual = $_POST['gioitinh'] ;
    $diachi = isset($_POST['diachi']) ? $_POST['diachi'] : die("Địa chỉ không được để trống");
    $quocgia = $_POST['quocgia'] ;
    $tinh = $_POST['tinh'] ;
    $quan =  $_POST['quan'];
    $phuong =  $_POST['phuong'] ;
    $query = "INSERT INTO tbl_khachhang(idKH,Ho,Ten,Email,phoneNumber,NgaySinh,GioiTinh,diaChi,QuocGia,Tinh,Quan,Phuong) VALUES('$idKH','$ho','$ten','$email','$phone','$dob','$sexual','$diachi','$quocgia','$tinh','$quan','$phuong')";
    $result = mysqli_query($conn, $query);
    header('location: admin.php');
?>
