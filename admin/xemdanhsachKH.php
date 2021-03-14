
<?php
    $conn = mysqli_connect('localhost','root','','loginsystem');
    $query = "SELECT IDKH, Ho, Ten, Email, phoneNumber, NgaySinh, GioiTinh, diaChi, QuocGia, Tinh, Quan, Phuong FROM tbl_khachhang";
   
   $result = mysqli_query($conn,$query);
   
    while($post = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr id= 'hang'><td >".$post["IDKH"]."</td><td >".$post["Ho"]."</td><td>".$post["Ten"]."</td><td>".$post["Email"]."</td><td>".$post["phoneNumber"]."</td><td>".$post["NgaySinh"]."</td><td>".$post["GioiTinh"]."</td>
        <td>".$post["diaChi"]."</td><td>".$post["QuocGia"]."</td><td>".$post["Tinh"]."</td><td>".$post["Quan"]."</td><td>".$post["Phuong"]."</td><td><a href='suakhachhang.php?IDKH=".$post["IDKH"]."'>Sửa</a>|<a href='xoakhachhang.php?IDKH=".$post["IDKH"]."'><button onclick = xoa()>Xóa</button></a></td></tr><br>";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
<script>
    function xoa(){
       var hang = document.getElementById('hang');
       hang.remove();
    }
</script>
</html>