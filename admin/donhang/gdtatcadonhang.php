<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giao diện tất cả đơn hàng</title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
                  <div class="tabcontent" id="tatcadonhangnhe">
                    <div class="title">
                        <h2 style="text-align: center;">Tất cả các đơn hàng</h2>
                     </div>
                    <table class="table" style="width:100%; border: 1px solid #000000">
                          <tr >
                            <th>ID đơn hàng</th>
                            <th>Tên mặt hàng </th>
                            <th>Giá mặt hàng</th>
                            <th>Khối lượng</th>
                            <th>Phí vận chuyển </th>
                            <th>Phương thức thanh toán</th>
                            <th>ID khách hàng</th>
                            <th>Hành động</th>
                          </tr>
                       <?php
                       include 'xemdonhang.php';
                       ?>
                      </table>
                 </div>
</body>
</html>
                  