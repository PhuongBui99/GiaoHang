<?php

      $idkh = $_GET['IDKH'];
      $conn = mysqli_connect('localhost','root','','loginsystem');
      $query = "DELETE FROM tbl_khachhang WHERE IDKH = '$idkh'";
      $result = mysqli_query($conn, $query);
      header('location: gddskhachhang.php');
?>



