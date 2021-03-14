<?php

 $idkh = $_GET['IDKH'];
 $conn = mysqli_connect('localhost','root','','loginsystem');
 $query = "SELECT IDKH, Ho, Ten, Email, phoneNumber, NgaySinh, GioiTinh, diaChi, QuocGia, Tinh, Quan, Phuong FROM tbl_khachhang WHERE IDKH = '$idkh'";
 $result = mysqli_query($conn, $query);
 $post = mysqli_fetch_array($result, MYSQLI_ASSOC)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa khách hàng</title>
    <style>
    
          .btncapnhat{
              margin-top: 15px;
              border: 1px solid #000;
              padding: 10px 15px;
              color: #000;
              font-weight: 700;
          }

          .btncapnhat:hover{
              color: #fff;
              background-color: #000;
          }

          .tabcontent{
              padding-left: 15px;
          }
    </style>
</head>
<body>
<div class="tabcontent" id="taoKhachHang">
                <div class="model-Customers-content">
                    <h2 style="color: #000000;">THÔNG TIN KHÁCH HÀNG</h2>
                    <div class="card card-body" >
                        <p class="line"></p>
                            <form action="xuli_sua.php" id="myForm" method="post">
                            <div class="row" >
                            <div class="col-lg-6">
                            <input type="hidden" name="idkh" value="<?php echo $post['IDKH']; ?>">   </div>
                                <p style="color: #000;">Họ</p>
                                <input type="text" name="ho" placeholder="Nhập họ" value="<?php echo $post['Ho']; ?>">
                            </div>
                            <div class="col-lg-6">
                                <p style="color: #000;">Tên</p>
                                <input type="text" name="tencuaban" placeholder="Nhập tên" value="<?php echo $post['Ten']; ?>">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-3" style="color: #000;">Địa chỉ Email</p>
                                <input type="text" name="email" placeholder="Nhập địa chỉ email" value="<?php echo $post['Email']; ?>">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-3" style="color: #000;">Số điện thoại</p>
                                <input type="text" name="phone" placeholder="Nhập số điện thoại" value="<?php echo $post['phoneNumber']; ?>">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-3" style="color: #000;">Ngày tháng năm sinh</p>
                                <input type="text" name="dob" placeholder="Nhập ngày tháng năm sinh" value="<?php echo $post['NgaySinh']; ?>">
                            </div>
                            <div class="col-lg-6">
                                <select name="gioitinh" class="custom-select mt-3">
                                    <option value="Nữ">Nữ</option>
                                    <option value="Nam">Nam</option>
                                </select>
                            </div>
                            </div>
                    </div>
                    
                    
                        <div class="card card-body mt-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="mt-3" style="color: #000;">Địa chỉ</p>
                                    <input type="text" name="diachi" placeholder="Nhập địa chỉ" value="<?php echo $post['diaChi']; ?>">
                                </div>
                                <div class="col-lg-6">
                                    <p class="mt-3" style="color: #000;">IDKH</p>
                                    <input type="text" name="idkh" value="<?php echo $post['IDKH']; ?>">   </div>
                                <div class="col-lg-6">
                                    <p class="mt-3" style="color: #000;">Quốc gia</p>
                                    <select name="quocgia" class="custom-select mt-3" required>
                                        <option value="Việt Nam">Việt Nam</option>
                                        <option value="Anh">Anh</option>
                                        <option value="Mĩ">Mĩ</option>
                                        <option value="Hàn Quốc">Hàn Quốc</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mt-3" style="color: #000;">Tỉnh/ Thành phố</p>
                                    <select name="tinh" class="custom-select mt-3" required>
                                        <option value="Hà Nội">Hà Nội</option>
                                        <option value="Tp Hồ Chí Minh">TP Hồ Chí Minh</option>
                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                        <option value="Hải Phòng">Hải Phòng</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mt-3" style="color: #000;">Quận/ Huyện/ </p>
                                    <select name="quan" class="custom-select mt-3" required>
                                        <option value="Hà Đông">Hà Đông</option>
                                        <option value="Thanh Xuân">Thanh Xuân</option>
                                        <option value="Đống Đa">Đống Đa</option>
                                        <option value="Hoàn Kiếm">Hoàn Kiếm</option>
                                        <option value="Hoàng Mai">Hoàng Mai</option>
                                        <option value="Ba Đình">Ba Đình</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mt-3" style="color: #000;">Phường/ Xã</p>
                                    <select name="phuong" class="custom-select mt-3" required>
                                        <option value="Mộ Lao">Mộ Lao</option>
                                        <option value="Văn Quán">Văn Quán</option>
                                        <option value="Vạn Phúc">Vạn Phúc</option>
                                        <option value="Phúc La">Phúc La</option>
                                        <option value="Hà Cầu">Hà Cầu</option>
                                        <option value="Quang Trung">Quang Trung</option>
                                    </select>
                                    <br>
                                    <input type="submit" class="mt-3 btncapnhat" value="Cập nhật khách hàng">
                                </div>
                            </div>
                            </form>
                        </div>
                </div>
            </div>
            
</body>
</html>
