<?php
       $conn = mysqli_connect('localhost','root','','loginsystem');
       $query = "SELECT idDH, TenMH, GiaMH, KhoiLuong, shipprice, payment, idKH  FROM tbl_donhang";
       $result = mysqli_query($conn, $query);
       while($post = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr id='hang'><td>".$post["idDH"]."</td><td >".$post["TenMH"]."</td><td>".$post["GiaMH"]."</td><td>".$post["KhoiLuong"]."</td><td>".$post["shipprice"]."</td><td>".$post["payment"]."</td><td>".$post["idKH"]."</td>
      <td><a href='suadonhang.php?IDDH=".$post["idDH"]."'>Sửa</a> | <a href='xoadonhang.php?IDDH=".$post["idDH"]."'><button onclick= xoa()>Xóa</button></a></td></tr><br>";
    }
?>

<script>
      function xoa(){
           hang = document.getElementById('hang');
           hang.remove();
           location.reload();
      }
</script>

