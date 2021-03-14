<?php
  $conn = mysqli_connect('localhost','root','','loginsystem');
  $query = "SELECT Davanchuyen, Dadonggoi, Danggui, Tonkho FROM tbl_report";
  $result = mysqli_query($conn, $query);
  $post = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $tong = $post['Davanchuyen'] + $post['Dadonggoi'] +  $post['Danggui'] + $post['Tonkho'];
  $davanchuyen = round(($post['Davanchuyen'] / $tong * 100),2);
  $dadonggoi = round(($post['Dadonggoi'] / $tong * 100),2);
  $danggui = round(($post['Danggui'] / $tong * 100),2);
  $tonkho = round(($post['Tonkho'] / $tong * 100),2);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

.container1 {
  width: 100%;
  background-color: #ddd;
}

.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}

.html {width: <?php echo $davanchuyen."%"; ?>; background-color: #4CAF50;}
.css {width: <?php echo $dadonggoi."%"; ?>; background-color: #2196F3;}
.js {width: <?php echo  $danggui."%"; ?>; background-color: #f44336;}
.php {width: <?php echo $tonkho."%"; ?>; background-color: #808080;}
</style>
</head>
<body>

<h1>Bảng thống kê đơn hàng</h1>

<p>Đã vận chuyển</p>
<div class="container1">
  <div class="skills html"><?php echo $davanchuyen."%"; ?></div>
</div>

<p>Đã đóng gói</p>
<div class="container1">
  <div class="skills css"><?php echo $dadonggoi."%"; ?></div>
</div>

<p>Đang gửi</p>
<div class="container1">
  <div class="skills js"><?php echo $danggui."%"; ?></div>
</div>

<p>Tồn kho</p>
<div class="container1">
  <div class="skills php"><?php echo $tonkho."%"; ?></div>
</div>

</body>
</html>