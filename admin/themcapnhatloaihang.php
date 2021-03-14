<?php
     $conn = mysqli_connect('localhost','root','','loginsystem');
     $davanchuyen = isset($_POST['davanchuyen']) ? $_POST['davanchuyen'] : die("Không được để trống");
     $dadonggoi = isset($_POST['dadonggoi']) ? $_POST['dadonggoi'] : die("Không được để trống");
     $danggui = isset($_POST['danggui']) ? $_POST['danggui'] : die("Không được để trống");
     $tonkho = isset($_POST['tonkho']) ? $_POST['tonkho'] : die("Không được để trống");
     $query = "UPDATE tbl_report SET Davanchuyen = '$davanchuyen',Dadonggoi = '$dadonggoi', Danggui = '$danggui',Tonkho = '$tonkho' ";
     $result = mysqli_query($conn,$query);
     if($result){
        header('location: admin.php');
     }
?>