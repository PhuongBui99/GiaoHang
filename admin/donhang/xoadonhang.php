<?php
 $iddh = $_GET['IDDH'];
 $conn = mysqli_connect('localhost','root','','loginsystem');
 $query = "DELETE FROM tbl_donhang WHERE idDH = '$iddh'";
 $result = mysqli_query($conn, $query);
 header('location: gdtatcadonhang.php');
?>