<?php
     $connect = mysqli_connect('localhost','root','','loginsystem');
     if($connect){
         echo 'Thanh cong';
     }
     $email = isset($_POST['email']) ? $_POST['email'] : die("Không được bỏ trống thông tin này! ");
     $password = isset($_POST['password']) ? $_POST['password'] : die("Không được bỏ trống thông tin này! ");
     $query = "INSERT INTO tbl_admin(email,password) VALUES ('$email','$password')";
     $thuchien = mysqli_query($connect,$query);
?>