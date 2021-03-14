<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woody</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Piedra&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 style="font-family: 'Piedra', cursive; font-size: 50px; text-align: center;">WOODY</h3>
            </div>
            <ul class="lisst-unstyled component">
                <p>Nhà cung cấp</p>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Đơn
                        hàng</a>
                    <ul class="collapse lisst-unstyled" id="homeSubmenu">
                        <li><a href="#" onclick="openCity(event, 'donhang')">Tạo mới đơn hàng</a></li>
                        <li><a href="donhang/gdtatcadonhang.php">Tất cả các đơn hàng</a></li>
                        <li><a href="#">Thanh toán bỏ sót</a></li>
                    </ul>
                </li>
                <li>

                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
                        <i class="fas fa-truck"></i><span class="ml-3">Vận chuyển</span>
                    </a>
                    <ul class="collapse lisst-unstyled" id="collapseExample">
                        <li>
                            <a href="#" onclick="openCity(event, 'tongquan')" class="tablinks">Tổng quan</a>
                        </li>
                        <li>
                            <a href="#">Vận chuyển</a>
                        </li>
                        <li>
                            <a href="#">Quản lí thu hộ</a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="fas fa-tag mr-2"></i><span class="ml-3">Sản phẩm</span></a>
                    <ul class="collapse lisst-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Tất cả sản phẩm</a>
                        </li>
                        <li>
                            <a href="#">Nhóm sản phẩm</a>
                        </li>
                        <li>
                            <a href="#">Tồn kho</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><i class="far fa-user-circle mr-2"></i><span class="ml-3 tablinks" onclick="openCity(event, 'khachhang')">Khách hàng</span></a>
                </li>
                <li><a href="#"><i class="fas fa-gift mr-2"></i><span class="ml-3">Khuyến mại</span></a></li>
                <li><a href="#"><i class="fas fa-chart-bar mr-2"></i><span class="ml-3" onclick="openCity(event, 'baocao')">Báo cáo</span></a></li>
                <li><a href="#"><i class="fas fa-mobile-alt mr-2"></i><span class="ml-3">Ứng dụng</span></a></li>

            </ul>


        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg nabar-light bg-light" id="stick">
                <div class="container-fluid">
                    <div class="d-flex">
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                        </button>

                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <div class="input-group ml-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"  onclick="openCity(event, 'tracuudonvan')"><i class="fas fa-search"></i></span>
                                <input type="text" style="border-radius: 0;" class="form-control" placeholder="Tra cứu đơn vận">
                            </div>
                        </div>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <div class="notification mr-4 dropdown">
                                    <i class="far fa-bell dropdown-toggle" id="notify" data-toggle="dropdown"></i>
                                    <span class="number">3</span>

                                    <div class="dropdown-menu">
                                        <div class="dropdown-item">
                                            <p style="color: #000; font-size: 15px; font-weight: 500;">Bạn có
                                                <span>3</span> thông báo mới</p>
                                        </div>

                                        <div class="dropdown-divider"></div>
                                        <div class="dropdown-item">
                                            <p><i class="fas fa-circle mr-3"></i>Đơn hàng A đã được giao tới kho B</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p><i class="fas fa-circle mr-3"></i>Đơn hàng A đã được giao tới kho B</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p><i class="fas fa-circle mr-3"></i>Đơn hàng A đã được giao tới kho B</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="message mr-4 dropdown">
                                    <i class="far fa-comment-alt dropdown-toggle" id="mess" data-toggle="dropdown"></i>
                                    <span class="number">2</span>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-item">
                                            <p style="color: #000; font-size: 15px; font-weight: 500;">Bạn có
                                                <span>2</span> tin nhắn mới</p>
                                        </div>

                                        <div class="dropdown-divider"></div>
                                        <div class="dropdown-item">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="images/1.jpg" alt="">
                                                </div>
                                                <div class="col-3">
                                                    <p class="text ml-2">Minh Anh</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="activeTime "><span class="online"></span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p class="text ml-2 mt-2 new">Đơn hàng WH01245632222 đã đến kho A chưa?
                                                </p>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <div class="dropdown-item">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="images/2.jpg" alt="">
                                                </div>
                                                <div class="col-3">
                                                    <p class="text ml-2">Lê Minh</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="activeTime "><span class="online"></span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p class="text ml-2 mt-2 new">Đơn hàng WH01245632222 đã đến kho A chưa?
                                                </p>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <div class="dropdown-item">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="images/3.jpg" alt="">
                                                </div>
                                                <div class="col-3">
                                                    <p class="text ml-2">Hồng Hạnh</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="activeTime ">Online 5 phút trước</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p class="text ml-2 mt-2">Đơn hàng WH01245632222 đã đến kho A chưa?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="user mr-4 dropdown">

                                    <div class="image dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                        <span class="username" onclick="displayUser()"><img src="images/4.jpg"
                                                alt=""></span></div>
                                    <div class="dropdown-menu user-dropdown" aria-labelledby="dropdownMenuButton">
                                        <div class="dropdown-item">
                                            <div class="row">
                                                <div class="col-3"><img src="images/4.jpg" alt=""></div>
                                                <div class="col-9">
                                                    <h5>WOOD</h5>
                                                    <p>woodyCorportion@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <div class="dropdown-item"><i class="far fa-user mr-2"></i><span> Hồ sơ cá nhân
                                                và tài khoản</span></div>
                                        <div class="dropdown-item"><i class="fas fa-cog mr-2"></i><span> Cài đặt</span>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <div class="dropdown-item"><i class="fas fa-sign-out-alt mr-2"></i><span><a href="http://localhost/Donhang/index.php" style="text-decoration:none; color: #000;">Đăng xuất</a></span></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--MENU MOBILE START-->
                    <div class="collapse mt-3" id="navbarSupportedContent">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                                            <input type="text" style="border-radius: 0;" class="form-control"
                                                placeholder="Tra cứu đơn vận">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div class="notification mr-4 collapsed" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="far fa-bell" id="notify"></i>
                                        <span class="number">3</span>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="dropdown-menu1">
                                            <div class="dropdown-item">
                                                <p style="color: #000; font-size: 15px; font-weight: 500;">Bạn có
                                                    <span>3</span> thông báo mới</p>
                                            </div>

                                            <div class="dropdown-divider"></div>
                                            <div class="dropdown-item">
                                                <p><i class="fas fa-circle mr-3"></i>Đơn hàng A đã được giao tới kho B
                                                </p>
                                            </div>
                                            <div class="dropdown-item">
                                                <p><i class="fas fa-circle mr-3"></i>Đơn hàng A đã được giao tới kho B
                                                </p>
                                            </div>
                                            <div class="dropdown-item">
                                                <p><i class="fas fa-circle mr-3"></i>Đơn hàng A đã được giao tới kho B
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header collapsed" data-toggle="collapse" id="headingThree"
                                    data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <div class="message mr-4 ">
                                        <i class="far fa-comment-alt" id="mess"></i>
                                        <span class="number">2</span>

                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="dropdown-menu2">
                                                <div class="dropdown-item">
                                                    <p style="color: #000; font-size: 15px; font-weight: 500;">Bạn có
                                                        <span>2</span> tin nhắn mới</p>
                                                </div>

                                                <div class="dropdown-divider"></div>
                                                <div class="dropdown-item">

                                                    <div><img src="images/1.jpg" alt=""><span
                                                            class="online"></span><span>
                                                            <p class="text mt-2">Minh Anh</p>
                                                        </span></div>

                                                    <p class="textMobile">Đơn hàng WH01245632222 đã đến kho A chưa?</p>

                                                </div>
                                                <div class="dropdown-divider"></div>
                                                <div class="dropdown-item">

                                                    <div><img src="images/2.jpg" alt=""><span
                                                            class="online"></span><span>
                                                            <p class="text mt-2">Lê Minh</p>
                                                        </span></div>

                                                    <p class="textMobile">Đơn hàng WH01245632222 đã đến kho A chưa?</p>

                                                </div>
                                                <div class="dropdown-divider"></div>
                                                <div class="dropdown-item">
                                                    <div><img src="images/3.jpg" alt=""><span>
                                                            <p class="text mt-2">Hồng Hạnh</p>
                                                        </span></div>
                                                    <p class="textMobile">Đơn hàng WH01245632222 đã đến kho A chưa?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <div class="user mr-4 collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="true" aria-controls="collapseTwo">

                                        <div class="image"><span class="username"><img src="images/4.jpg" alt=""></span>
                                        </div>
                                    </div>


                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="dropdown-menu3 user-dropdown"
                                                aria-labelledby="dropdownMenuButton">
                                                <div class="dropdown-item">
                                                    <div class="row">
                                                        <div class="col-3"><img src="images/4.jpg" alt=""></div>
                                                        <div class="col-9">
                                                            <h5>WOOD</h5>
                                                            <p>woodyCorportion@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                                <div class="dropdown-item"><i class="far fa-user mr-2"></i><span> Hồ sơ
                                                        cá nhân và tài khoản</span></div>
                                                <div class="dropdown-item"><i class="fas fa-cog mr-2"></i><span> Cài
                                                        đặt</span></div>
                                                <div class="dropdown-divider"></div>
                                                <div class="dropdown-item"><i
                                                        class="fas fa-sign-out-alt mr-2"></i><span> Đăng xuất</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--MENU MOBILE END-->
            </nav>
            <br>
            <!--CONTENT START-->
            <!--Van chuyen tong quan start-->
            <div class="tabcontent" id="tongquan">
                <div class="title">
                    <p>Vận chuyển <span class="arrow"><i class="fas fa-angle-right"></i></span> Loại đơn hàng</p>
                </div>
                <div class="vanchuyen mt-5">
                <form action="themcapnhatloaihang.php" method="post">
                      <p>Đã vận chuyển</p>
                      <input name="davanchuyen" type="text" placeholder="Nhập số lượng">
                      <p class="mt-2">Đã đóng gói</p>
                      <input name="dadonggoi" type="text" placeholder="Nhập số lượng">
                      <p class="mt-2">Đang gửi</p>
                      <input name="danggui" type="text" placeholder="Nhập số lượng">
                      <p class="mt-2">Tồn kho</p>
                      <input name="tonkho" type="text" placeholder="Nhập số lượng"> <br> 
                      <input class="mt-2" type="submit" value="SUBMIT">  
                </form>
                </div>
            </div>

            <!--Van chuyen tong quan end-->
            <!--DON HANG START-->
                    <div class="tabcontent" id="donhang">
                        <div class="title">
                            <p>Đơn hàng <span class="arrow"><i class="fas fa-angle-right"></i></span> Tạo mới đơn hàng</p>
                         </div>
                         <div class="thongtindonhang">
                             <h5>Thông tin đơn hàng</h5>
                             <p style="font-size: 15px;">VUI LÒNG CUNG CẤP CÁC THÔNG TIN VỀ ĐƠN HÀNG SẼ TẠO</p>
                         </div>
                         <div class="taodonhang">
                             
                                <form action="donhang/themdonhang.php" method="post">
                                <div class="row mt-5">
                                <div class="col-6">
                                        <p>Nhập mã đơn hàng</p>
                                        <input  name="IDDH" type="text" placeholder="Nhập mã đơn hàng">
                                        <p class="mt-2">Tên mặt hàng</p>
                                        <input  name="TenMH" type="text" placeholder="Nhập tên mặt hàng">
                                        <p class="mt-2">Trị giá thật</p>
                                        <input name="GiaMH" type="text" placeholder="Nhập trị giá">
                                        <p class="mt-2">Cân nặng</p>
                                        <input name="weight" type="text" placeholder="Nhập cân nặng">
                                </div>
                                     <div class="col-6">
                                        
                                        <p>Phí vận chuyển</p>
                                        <input name="shipprice" type="text" placeholder="Nhập phí vận chuyển">
                                        <p class="mt-2">Hình thức thanh toán</p>
                                        <select name="payment" class="option" >
                                            <option selected>Thanh toán bằng tiền mặt</option>
                                            <option value="Ví Momo">Ví Momo</option>
                                            <option value="Ví airpay">Ví airpay</option>
                                            <option value="Nạp thẻ">Nạp thẻ</option>
                                            <option value="Internet banking">Internet banking</option>
                                          </select>
                                        <p class="mt-2">Nhập mã khách hàng</p>
                                        <input name="idKH" type="text" placeholder="Nhập mã khách hàng">
                                     </div>
                                     <input type="submit" class="mt-4 ml-3" value="Thêm đơn hàng mới">
                                     </div>
                                </form>  
                          </div>
                    </div>
            <!--DON HANG END-->

            <!--KHACH HANG START-->
            <div class="tabcontent" id="khachhang">
                <div class="row">
                   
                        <div class="QLKH">
                            <h5>Quản lí danh sách khách hàng</h5>
                            <p>Khi khách hàng đặt hàng, bạn sẽ biết được thông tin và lịch sử mua hàng của khách hàng
                            </p>
                            <button class="taoKH mr-3" onclick="openCity(event, 'taoKhachHang')">Tạo khách hàng</button>
                            <button style="background-color: inherit" class="xemDSKH mr-3"><a href="gddskhachhang.php">Xem danh sách khách hàng</a></button>
                            <a href="#" id="NhapFile">Nhập file khách hàng</a>
                            <p class="mt-3">Tìm kiếm khách hàng</p>
                            <div class="search-box mt-1">
                                <input type="text" autocomplete="off" placeholder="Nhập tên khách hàng..." />
                                <div class="result mt-5"></div>
                            </div>
                        </div>
                        
                            <!-- Modal add Customers content start -->
                            
                            <!-- Modal add Customers content end -->

                </div>
            </div>
            <!--Tao khach hang moi start-->
            <div class="tabcontent" id="taoKhachHang">
                <div class="model-Customers-content">
                    <h5 style="color: #000000;">THÔNG TIN KHÁCH HÀNG</h5>
                    <p style="color: #aaa;">Vui lòng cung cấp các thông tin khách hàng cần tạo</p>
                    <div class="card card-body" >
                        <p class="card-title" style="color: #000000; font-weight: 700;">Thông tin chung</p>
                        <p class="line"></p>
                            <form action="themkhachhang.php" id="myForm" method="post">
                            <div class="row" >
                            <div class="col-lg-6">
                                <p style="color: #000;">Họ</p>
                                <input type="text" name="ho" placeholder="Nhập họ">
                            </div>
                            <div class="col-lg-6">
                                <p style="color: #000;">Tên</p>
                                <input type="text" name="ten" placeholder="Nhập tên">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-3" style="color: #000;">Địa chỉ Email</p>
                                <input type="text" name="email" placeholder="Nhập địa chỉ email">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-3" style="color: #000;">Số điện thoại</p>
                                <input type="text" name="phone" placeholder="Nhập số điện thoại">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-3" style="color: #000;">Ngày tháng năm sinh</p>
                                <input type="text" name="dob" placeholder="Nhập ngày tháng năm sinh">
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
                            <p class="ml-3 card-title" style="color: #000000; font-weight: 700;">Địa chỉ</p>
                            <div class="line"></div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="mt-3" style="color: #000;">Địa chỉ</p>
                                    <input type="text" name="diachi" placeholder="Nhập địa chỉ">
                                </div>
                                <div class="col-lg-6">
                                    <p class="mt-3" style="color: #000;">Nhập id khách hàng</p>
                                    <input type="text" name="idKH" placeholder="Nhập id khách hàng">
                                </div>
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
                                    <input type="submit" class="mt-3" value="Thêm khách hàng">
                                </div>
                            </div>
                            </form>
                        </div>
                </div>
            </div>
            <!--Tao khach hang moi end-->
            <!--KHACH HANG END-->

            <!--BÁO CÁO START-->
                     <div class="tabcontent" id="baocao">
                         <div class="group-button mb-3">
                            <button class="tablink" onclick="openPage('Baocaobanhang', event)">Báo cáo đơn hàng</button>
                            <button class="tablink" onclick="openPage('Baocaotaichinh',event)">Báo cáo tài chính</button>
                            <button class="tablink" onclick="openPage('Baocaowebsite', event)">Báo cáo website</button>
                         </div>
                       
                        
                        <div id="Baocaobanhang" class="tab">
                             <?php
                                 include 'gdbaocao.php';
                             ?>
                        </div>
                        
                        <div id="Baocaotaichinh" class="tab">
                            
                        </div>
                        
                        <div id="Baocaowebsite" class="tab">
                            
                        </div>
                     </div>
            <!--BÁO CÁO END-->

            <!--TRA CỨU ĐƠN VẬN START-->
                 <div class="tabcontent" id="tracuudonvan">
                     <h5>TRA CỨU ĐƠN VẬN</h5>
                     <div class="card card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Mã đơn hàng</th>
                                <th scope="col">Khối lượng(gam)</th>
                                <th scope="col">Trạng thái</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">EQ343189562VN</th>
                                <td>250</td>
                                <td>Đã phát thành công</td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Nước chấp nhận</th>
                                <th scope="col">Nước phát</th>
                                <th scope="col">Bưu cục nhận</th>
                                <th scope="col">Bưu cục phát</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Việt Nam</th>
                                <td>Việt Nam</td>
                                <td>Hà Đông</td>
                                <td>Thanh Xuân</td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="row">
                              <h5>Thông tin trạng thái</h5>
                              <div class="lichtrinh">
                                <p><span class="dot"></span><span class="date mr-2 ml-3">17/10/2020</span><span class="time mr-2">00:30</span>Đã đến bưu cục (Arrival at PO) (101000: Hà Nội EMS NT - Hà Nội ) Sô´26, Đường Phạm Văn Đồng, Xã Xuân Đỉnh, Nam Từ Liêm, Hà Nội</p>
                                <p><span class="dot"></span><span class="date mr-2 ml-3">17/10/2020</span><span class="time">02:16</span>Đi khỏi bưu cục (Departure from PO) (101000: Hà Nội EMS NT - Hà Nội ) Sô´26, Đường Phạm Văn Đồng, Xã Xuân Đỉnh, Nam Từ Liêm, Hà Nội</p>
                                <p><span class="dot"></span><span class="date mr-2 ml-3">17/10/2020</span><span class="time">07:10</span> Đã đến bưu cục (Arrival at PO) (151505: BCP Hà Đông 1 - Hà Nội ) Sô´4, Đường Quang Trung ( 0 Số ), Phường Yết Kiêu, Hà Đông, Hà Nội</p>
                                <p><span class="dot"></span><span class="date mr-2 ml-3">17/10/2020</span><span class="time">07:46</span>Đi khỏi bưu cục (Departure from PO) (151505: BCP Hà Đông 1 - Hà Nội ) Sô´4, Đường Quang Trung ( 0 Số ), Phường Yết Kiêu, Hà Đông, Hà Nội</p>
                                <p><span class="dot"></span><span class="date mr-2 ml-3">17/10/2020</span><span class="time">15:13</span>Phát thành công (Delivered) (151505: BCP Hà Đông 1 - Hà Nội ) Sô´4, Đường Quang Trung ( 0 Số ), Phường Yết Kiêu, Hà Đông, Hà Nội</p>
                            
                              </div>
                            </div>
                     </div>
                 </div>
            <!--TRA CỨU ĐƠN VẬN END-->
            <!--CONTENT END-->
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#sidebarCollapse").on('click', function(){
                $("#sidebar").toggleClass('active');
                console.log("hello hi")
            })
        })
    </script>
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Lấy giá trị thành phần vừa nhập */
        var inputVal = $(this).val();
         /* Tìm tất cả các anh chị em ngoại trừ chính nó */
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Hiển thị dữ liệu trả về trong trình duyệt
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Thiết lập giá trị đầu vào khi click vào result
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
   
</body>

</html>