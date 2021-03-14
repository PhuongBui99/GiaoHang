<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Don Hang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Spectral+SC:wght@500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #cd295a;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #d35656;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #030000;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #FC6600;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #50f41e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #FCBC49;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: 'Poppins', sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage" style="font-family: 'Architects Daughter', cursive;">TEMPO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">Giới thiệu</a></li>
        <li><a href="#services">Dịch vụ</a></li>
        <li><a href="#portfolio">Chi nhánh</a></li>
        <li><a href="#pricing">Mức giá</a></li>
        <li><a href="#contact">Liên hệ</a></li>
        <li><a href="dangnhap.php" >ĐĂNG NHẬP</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1 style="font-family: 'Spectral SC', serif;">Công ty TEMPO</h1> 
  <p>Chúng tôi luôn luôn đặt uy tín lên hàng đầu</p>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Vài nét về công ty </h2><br>
      <h4>Công ty DH là một trong những công ty được khách hàng tin dùng và ủng hộ. Bởi sự nhiệt tình với khách hàng, xử lý đơn hàng nhanh chóng, đảm bảo chất lượng.</h4><br>
      <p>Công ty DH hoạt động mang đến sự tin dùng cho khách hàng. Với nhiều năm kinh nghiệm hoạt động, chúng tôi tự tin đem đến cho khách hàng sự hài lòng, tin tưởng. Với mức độ phủ sóng toàn quốc, công ty DH sẽ mang đến cho các khách hàng sự trải nghiệm tốt nhất.</p>
      <br><button class="btn btn-default btn-lg">Tìm hiểu thêm</button>
    </div>
    <div class="col-sm-4">
      <span class=" logo-small"><img style="width: 200px; height: 200px" src="image/delivery-man.png" alt=""></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class=" logo-small"><img style="width: 200px; height: 200px" src="image/company.png" alt=""></span>
    </div>
    <div class="col-sm-8">
      <h2>Giá trị của chúng tôi</h2><br>
      <h4><strong>TẦM NHÌN: </strong>Chúng tôi sẽ ngày một phát triển và vươn xa toàn cầu, trở thành dịch vụ tốt nhất mà khách hàng không bỏ qua.</h4><br>
      <p><strong>SỨ MỆNH: </strong> Chúng tôi sẽ trở thành dịch vụ thân thiết khách hàng tin dùng, nâng cao hiệu suất làm việc, thời gian quản lý đơn hàng nhanh chóng dễ dàng.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>DỊCH VỤ TỐT NHẤT</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class=" logo-small"><img style="width: 50px; height: 50px" src="image/badge.png" alt=""></span>
      <h4>TƯ VẤN</h4>
      <p>Chúng tôi luôn nhiệt tình giải đáp mọi thắc mắc của khách hàng.</p>
    </div>
    <div class="col-sm-4">
      <span class=" logo-small"><img style="width: 50px; height: 50px" src="image/dollar.png" alt=""></span>
      <h4>THANH TOÁN</h4>
      <p>Dịch vụ thanh toán tiện ích liên kết airpay và tài khoản ngân hàng.</p>
    </div>
    <div class="col-sm-4">
      <span class=" logo-small"><img style="width: 50px; height: 50px" src="image/box.png" alt=""></span>
      <h4>TRẢ HÀNG</h4>
      <p>Đơn hàng của khách hàng được hỗ trợ đổi trả khi có vấn đề phát sinh.</p>
    </div>
  </div>
  <br><br>
  
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>TRỤ SỞ</h2><br>
  <h4>Chúng tôi có trụ sở trên 3 miền đất nước</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="image/HaNoi.jpg" alt="Paris" width="400" height="300">
        <p><strong>Hà Nội</strong></p>
        <p>Địa chỉ: số 1 Nguyễn Trãi, Hà Đông, Hà Nội.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="image/DaNang.jpg" alt="New York" width="400" height="300">
        <p><strong>Đà Nẵng</strong></p>
        <p>Địa chỉ: số 10 Hoàng Diệu, TP Đà Nắng</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="image/TPHCM.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>TP Hồ Chí Minh</strong></p>
        <p>Địa chỉ: số 1 Tô Hiệu, Tân Phú, TP Hồ Chí Minh </p>
      </div>
    </div>
  </div><br>
  
  <h2>Đánh giá của khách hàng</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Dịch vụ công ty rất tốt, hàng vận chuyển nhanh!"<br><span>Nguyễn Hà</span></h4>
      </div>
      <div class="item">
        <h4>"Perfect! Giao hàng nhanh gọn."<br><span>Trần Huy</span></h4>
      </div>
      <div class="item">
        <h4>"Hàng về đúng hẹn! Nhân viên nhiệt tình!"<br><span>Nguyễn Hạnh Phúc</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>PHÍ VẬN CHUYỂN</h2>
    <h4>Khách hàng có thể lựa chọn phí vận chuyển phù hợp</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>CHUYỂN THƯỜNG</h1>
        </div>
        <div class="panel-body">
          <p><strong>Phí 10.000</strong> đối với hàng nội tỉnh </p>
          <p><strong>Phí 20.000</strong> đối với hàng ngoại tỉnh</p>
        </div>
        <div class="panel-footer">
          <h3>7-10</h3>
          <h4>Ngày vận chuyển</h4>
          <button class="btn btn-lg"><a style="text-decoration: none; color: white;" href="dangky.html">Đăng ký</a></button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>CHUYỂN NHANH</h1>
        </div>
        <div class="panel-body">
          <p><strong>Phí 20.000</strong> đối với hàng nội tỉnh</p>
          <p><strong>Phí 30.000</strong> đối với hàng ngoại tỉnh</p>
        </div>
        <div class="panel-footer">
          <h3>2-3</h3>
          <h4>Ngày vận chuyển</h4>
          <button class="btn btn-lg"><a style="text-decoration: none;  color: white;" href="dangky.html">Đăng ký</a></button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>CHUYỂN HỎA TỐC</h1>
        </div>
        <div class="panel-body">
          <p><strong>Phí 30.000</strong> đối với hàng nội tỉnh</p>
          <p><strong>Phí 40.000</strong> đối với hàng ngoại tỉnh</p>
        </div>
        <div class="panel-footer">
          <h3>2-24</h3>
          <h4>giờ vận chuyển</h4>
          <button class="btn btn-lg"><a style="text-decoration: none;  color: white;" href="dangky.html">Đăng ký</a></button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">LIÊN HỆ</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Liên hệ với chúng tôi. Chúng tôi luôn sẵn sàng hỗ trợ bạn 24/24.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Ba Đình, Hà Nội</p>
      <p><span class="glyphicon glyphicon-phone"></span> +84 19001009</p>
      <p><span class="glyphicon glyphicon-envelope"></span> DH@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Họ và tên" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Bình luận" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <input type="button" class ="btn btn-danger" onclick="alert('Phản hồi của bạn đã được ghi lại!')" value="Gửi"/>
        </div>
      </div>
    </div>
  </div>
</div>



<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
