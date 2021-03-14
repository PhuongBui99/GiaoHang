<?php
    $iddh = $_GET['IDDH'];
    $conn = mysqli_connect('localhost','root','','loginsystem');
    $query = "SELECT idDH, TenMH, GiaMH, KhoiLuong, shipprice, payment, idKH FROM tbl_donhang WHERE idDH = '$iddh'";
    $result = mysqli_query($conn, $query);
    $post = mysqli_fetch_array($result, MYSQLI_ASSOC)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin mặt hàng</title>
    <style>
          #tatcadonhang{
              margin-left: 150px;
          }
          .btncapnhat{
              margin-top: 15px;
              border: 1px solid #000;
              padding: 10px 15px;
              color: #000;
              font-weight: 700;
          }

          .btncapnhat:hover{
              color: #fff;
              background-color: #000;
          }
    </style>
</head>
<body>
<div class="tabcontent" id="tatcadonhang">
<h2>SỬA THÔNG TIN MẶT HÀNG</h2>
<form action="xuli_suadonhang.php" method="post">
                            <div class="row" >
                            
                            <input type="hidden" name="iddh" value="<?php echo $post['idDH']; ?>">   </div>
                                <p style="color: #000;">Tên mặt hàng</p>
                                <input type="text" name="TenMH" value="<?php echo $post['TenMH']; ?>">
                            </div>
                            <div class="col-lg-6">
                                <p style="color: #000;">Giá mặt hàng</p>
                                <input type="text" name="GiaMH" value="<?php echo $post['GiaMH']; ?>">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-3" style="color: #000;">Khối lượng</p>
                                <input type="text" name="KhoiLuong" value="<?php echo $post['KhoiLuong']; ?>">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-3" style="color: #000;">Phí vận chuyển</p>
                                <input type="text" name="shipprice" value="<?php echo $post['shipprice']; ?>">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-3" style="color: #000;">Phương thức thanh toán</p>
                                <input type="text" name="payment" value="<?php echo $post['payment']; ?>">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-3" style="color: #000;">Mã khách hàng </p>
                                <input type="text" name="idKH" value="<?php echo $post['idKH']; ?>">
                            </div>
                            <input type="submit" class="btncapnhat" value="Cập nhật">
                            </form>
</div>
</body>
</html>
