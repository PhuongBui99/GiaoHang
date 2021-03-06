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
        <li><a href="#about">Gi???i thi???u</a></li>
        <li><a href="#services">D???ch v???</a></li>
        <li><a href="#portfolio">Chi nh??nh</a></li>
        <li><a href="#pricing">M???c gi??</a></li>
        <li><a href="#contact">Li??n h???</a></li>
        <li><a href="dangnhap.php" >????NG NH???P</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1 style="font-family: 'Spectral SC', serif;">C??ng ty TEMPO</h1> 
  <p>Ch??ng t??i lu??n lu??n ?????t uy t??n l??n h??ng ?????u</p>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>V??i n??t v??? c??ng ty </h2><br>
      <h4>C??ng ty DH l?? m???t trong nh???ng c??ng ty ???????c kh??ch h??ng tin d??ng v?? ???ng h???. B???i s??? nhi???t t??nh v???i kh??ch h??ng, x??? l?? ????n h??ng nhanh ch??ng, ?????m b???o ch???t l?????ng.</h4><br>
      <p>C??ng ty DH ho???t ?????ng mang ?????n s??? tin d??ng cho kh??ch h??ng. V???i nhi???u n??m kinh nghi???m ho???t ?????ng, ch??ng t??i t??? tin ??em ?????n cho kh??ch h??ng s??? h??i l??ng, tin t?????ng. V???i m???c ????? ph??? s??ng to??n qu???c, c??ng ty DH s??? mang ?????n cho c??c kh??ch h??ng s??? tr???i nghi???m t???t nh???t.</p>
      <br><button class="btn btn-default btn-lg">T??m hi???u th??m</button>
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
      <h2>Gi?? tr??? c???a ch??ng t??i</h2><br>
      <h4><strong>T???M NH??N: </strong>Ch??ng t??i s??? ng??y m???t ph??t tri???n v?? v????n xa to??n c???u, tr??? th??nh d???ch v??? t???t nh???t m?? kh??ch h??ng kh??ng b??? qua.</h4><br>
      <p><strong>S??? M???NH: </strong> Ch??ng t??i s??? tr??? th??nh d???ch v??? th??n thi???t kh??ch h??ng tin d??ng, n??ng cao hi???u su???t l??m vi???c, th???i gian qu???n l?? ????n h??ng nhanh ch??ng d??? d??ng.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>D???CH V??? T???T NH???T</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class=" logo-small"><img style="width: 50px; height: 50px" src="image/badge.png" alt=""></span>
      <h4>T?? V???N</h4>
      <p>Ch??ng t??i lu??n nhi???t t??nh gi???i ????p m???i th???c m???c c???a kh??ch h??ng.</p>
    </div>
    <div class="col-sm-4">
      <span class=" logo-small"><img style="width: 50px; height: 50px" src="image/dollar.png" alt=""></span>
      <h4>THANH TO??N</h4>
      <p>D???ch v??? thanh to??n ti???n ??ch li??n k???t airpay v?? t??i kho???n ng??n h??ng.</p>
    </div>
    <div class="col-sm-4">
      <span class=" logo-small"><img style="width: 50px; height: 50px" src="image/box.png" alt=""></span>
      <h4>TR??? H??NG</h4>
      <p>????n h??ng c???a kh??ch h??ng ???????c h??? tr??? ?????i tr??? khi c?? v???n ????? ph??t sinh.</p>
    </div>
  </div>
  <br><br>
  
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>TR??? S???</h2><br>
  <h4>Ch??ng t??i c?? tr??? s??? tr??n 3 mi???n ?????t n?????c</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="image/HaNoi.jpg" alt="Paris" width="400" height="300">
        <p><strong>H?? N???i</strong></p>
        <p>?????a ch???: s??? 1 Nguy???n Tr??i, H?? ????ng, H?? N???i.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="image/DaNang.jpg" alt="New York" width="400" height="300">
        <p><strong>???? N???ng</strong></p>
        <p>?????a ch???: s??? 10 Ho??ng Di???u, TP ???? N???ng</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="image/TPHCM.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>TP H??? Ch?? Minh</strong></p>
        <p>?????a ch???: s??? 1 T?? Hi???u, T??n Ph??, TP H??? Ch?? Minh </p>
      </div>
    </div>
  </div><br>
  
  <h2>????nh gi?? c???a kh??ch h??ng</h2>
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
        <h4>"D???ch v??? c??ng ty r???t t???t, h??ng v???n chuy???n nhanh!"<br><span>Nguy???n H??</span></h4>
      </div>
      <div class="item">
        <h4>"Perfect! Giao h??ng nhanh g???n."<br><span>Tr???n Huy</span></h4>
      </div>
      <div class="item">
        <h4>"H??ng v??? ????ng h???n! Nh??n vi??n nhi???t t??nh!"<br><span>Nguy???n H???nh Ph??c</span></h4>
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
    <h2>PH?? V???N CHUY???N</h2>
    <h4>Kh??ch h??ng c?? th??? l???a ch???n ph?? v???n chuy???n ph?? h???p</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>CHUY???N TH?????NG</h1>
        </div>
        <div class="panel-body">
          <p><strong>Ph?? 10.000</strong> ?????i v???i h??ng n???i t???nh </p>
          <p><strong>Ph?? 20.000</strong> ?????i v???i h??ng ngo???i t???nh</p>
        </div>
        <div class="panel-footer">
          <h3>7-10</h3>
          <h4>Ng??y v???n chuy???n</h4>
          <button class="btn btn-lg"><a style="text-decoration: none; color: white;" href="dangky.html">????ng k??</a></button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>CHUY???N NHANH</h1>
        </div>
        <div class="panel-body">
          <p><strong>Ph?? 20.000</strong> ?????i v???i h??ng n???i t???nh</p>
          <p><strong>Ph?? 30.000</strong> ?????i v???i h??ng ngo???i t???nh</p>
        </div>
        <div class="panel-footer">
          <h3>2-3</h3>
          <h4>Ng??y v???n chuy???n</h4>
          <button class="btn btn-lg"><a style="text-decoration: none;  color: white;" href="dangky.html">????ng k??</a></button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>CHUY???N H???A T???C</h1>
        </div>
        <div class="panel-body">
          <p><strong>Ph?? 30.000</strong> ?????i v???i h??ng n???i t???nh</p>
          <p><strong>Ph?? 40.000</strong> ?????i v???i h??ng ngo???i t???nh</p>
        </div>
        <div class="panel-footer">
          <h3>2-24</h3>
          <h4>gi??? v???n chuy???n</h4>
          <button class="btn btn-lg"><a style="text-decoration: none;  color: white;" href="dangky.html">????ng k??</a></button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">LI??N H???</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Li??n h??? v???i ch??ng t??i. Ch??ng t??i lu??n s???n s??ng h??? tr??? b???n 24/24.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Ba ????nh, H?? N???i</p>
      <p><span class="glyphicon glyphicon-phone"></span> +84 19001009</p>
      <p><span class="glyphicon glyphicon-envelope"></span> DH@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="H??? v?? t??n" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="B??nh lu???n" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <input type="button" class ="btn btn-danger" onclick="alert('Ph???n h???i c???a b???n ???? ???????c ghi l???i!')" value="G???i"/>
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
