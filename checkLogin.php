<?php
      $conn = mysqli_connect('localhost','root','','loginsystem');
      $email = isset($_POST['email']) ? $_POST['email'] : die("Không được bỏ trống thông tin này! ");
      $password = isset($_POST['password']) ? $_POST['password'] : die("Không được bỏ trống thông tin này! ");
      $query = "SELECT email, password FROM tbl_admin WHERE email = '$email' and password = '$password' ";
      $result = mysqli_query($conn,$query);
      $num_rows = mysqli_num_rows($result);//dem so hang duoc lay ra
      if($num_rows==0){
          echo "Email hoặc mật khẩu sai!";
      }else{
          header('Location: admin/admin.php');
      }
?>