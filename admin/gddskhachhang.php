<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao diện danh sách khách hàng</title>
    <style>
          table, th, td {
       border: 1px solid black;
       border-collapse: collapse;
       text-align: center;
}

      #hang a{
        text-decoration: none;
        font-size: 15px;
        color: #000;
        font-weight: 700;
      }

      #hang button{
        border: none;
        background-color: inherit;
        font-size: 15px;
        color: #000;
        font-weight: 700;
      }
    </style>
</head>
<body>
     <!--Xem danh sách khách hàng start-->
     <div class="tabcontent" id="xemDSKhachHangnhe">
                <h5 style="text-align: center; font-size: 30px">Danh sách khách hàng</h5>
                 <table class="table" style="width:100%; border: 1px solid #000000">
                    <tr>
                         <th>IDKH</th>
                         <th>Họ</th>
                         <th>Tên</th>
                         <th>Email</th>
                         <th>Số điện thoại</th>
                         <th>Ngày Sinh</th>
                         <th>Giới tính</th>
                         <th>Địa Chỉ</th>
                         <th>Quốc gia</th>
                         <th>Tỉnh</th>
                         <th>Quận</th>
                         <th>Phường</th>
                         <th>Hành động</th>
                    </tr>
                    <?php
                        include 'xemdanhsachKH.php';
                    ?>
                </table>
            </div>
            <!--Xem danh sách khách hàng end-->
</body>
</html>