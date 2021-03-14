<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="dangnhap" method="post" action="checkLogin.php">
        <div class="form-group">
          <label for="exampleInputEmail1" >Tên đăng nhập</label><br>
          <input type="email" name="email" class="form-control" style="margin-top: 10px; margin-bottom: 10px;padding: 10px 20px" id="exampleInputEmail1" aria-describedby="emailHelp">
         
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mật khẩu</label><br>
          <input type="password" name="password" class="form-control" style="margin-top: 10px; padding: 10px 20px;" id="exampleInputPassword1" >
        </div>
        
        <button type="submit" class="btn btn-primary" style="margin-top: 10px; padding: 10px;">Đăng nhập</button>
      </form>
</body>
</html>