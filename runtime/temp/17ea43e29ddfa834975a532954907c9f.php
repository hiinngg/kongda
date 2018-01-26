<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"D:\wamp3\wamp64\www\kongda\public/../application/index\view\index\index.html";i:1516755150;s:66:"D:\wamp3\wamp64\www\kongda\application\index\view\indexlayout.html";i:1516701471;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>匡达照明</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/hover.css/2.1.1/css/hover-min.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/css/swiper.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
body,html{
    font-family: -apple-system, BlinkMacSystemFont, "PingFang SC","Helvetica Neue",STHeiti,"Microsoft Yahei",Tahoma,Simsun,sans-serif;
	background:#404040;
}
.hvr-fade:hover,.hvr-fade:active,.hvr-fade:focus,nav .active,nav .active a,.orange{
	 color:#ffffff !important;
	 background-color: #f08200;
}

html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  line-height: 60px; /* Vertically center the text there */
  background-color: #000000;
	color:#ffffff;
}
.nav-menu a{
	color:#ffffff;
}





</style>


<body>

<div class="container-fluid p-0 " style="background:#ffffff ;">
<nav class="navbar navbar-expand-lg navbar-light bg-light  container" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
<div class="navbar-nav mr-auto d-flex align-items-center">
<p class="m-0 mr-3">
<span class="fa fa-phone"></span>
  <span class="navbar-text">
    86-0760-5165561
  </span>
</p>
<p class="my-0 mr">
<span class="fa fa-envelope"></span>
  <span class="navbar-text">
  486416516@qq.com
  </span>
</p>
</div>

 <form class="form-inline my-2 my-lg-0">
   <div class="input-group input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">@</span>
      </div>
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </form>
  </div>
</nav>
</div>

<div class="container-fluid px-0 " style="background:#f1f1f1 ;">
<nav class="navbar navbar-expand-lg navbar-light px-0 py-0 container " style="background:#f1f1f1 ;">
  <a class="navbar-brand  " href="#"  style="flex:0 1;" >
    <img class=" img-fluid"  style="min-width:180px;" src="/static/images/logo.png" alt="" />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class=" collapse navbar-collapse justify-content-end  " id="navbarSupportedContent"    >
    <ul class="navbar-nav  " style="vertical-align:bottom;" >
      <li class="nav-item  text-center" style="" >
        <a class="nav-link hvr-fade active  p-md-4" href="<?php echo url('index'); ?>">HOME</a>
      </li>
      <li class="nav-item text-center  " style="">
        <a class="nav-link hvr-fade p-md-4 " href="<?php echo url('products'); ?>">PRODUCTS</a>
      </li>
       <li class="nav-item text-center " style="">
        <a class="nav-link hvr-fade p-md-4 text-nowrap " href="<?php echo url('case'); ?>">APPLICATIONS</a>
      </li>
       <li class="nav-item dropdown text-center " >
        <a class="nav-link dropdown-toggle  hvr-fade p-md-4 text-nowrap  " href="<?php echo url('about'); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         ABOUT US
        </a>
        <div class="dropdown-menu nav-menu" aria-labelledby="navbarDropdown"  style="background:#F0972F;" >
          <a class="dropdown-item hvr-fade" href="#">Action</a>
          <a class="dropdown-item hvr-fade" href="#">Another action</a>
          <a class="dropdown-item hvr-fade" href="#">Something else here</a>
        </div>
      </li>
        <li class="nav-item text-center " style="">
        <a class="nav-link hvr-fade p-md-4 text-nowrap  " href="<?php echo url('contact'); ?>">CONTACT US</a>
      </li>
<!--       <li class="nav-item dropdown text-center" style="line-height:110px;width:110px;">
        <a class="nav-link dropdown-toggle  hvr-fade h-100" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown"  style="line-height:1.5;" >
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item " href="#">Something else here</a>
        </div>
      </li> -->
    
    </ul>
  </div>
</nav>
</div>
<div class="w-100 py-1 orange"></div>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  class="img-fluid d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container-fluid " style="background:#ffffff;" >
  <div class="container py-4">
  <div class=" row">
	  <div class="col-md-3  text-center  style="height:200px;" >
	     <p class="h2 border rounded w-100 font-weight-bold my-0 text-nowrap" style="height:182px;line-height:182px;color:#f08200;">
	        PRODUCTS
	     </p>
	  </div>
	  <div class="col-md-9 mt-3 mt-md-0" >
	  <div class="w-80 ml-md-5 " style="position:relative;">
	  
	<div class="swiper-container ">
	  
    <div class="swiper-wrapper">
        <div class="swiper-slide " style="width:auto;">
       <figure class="figure position-relative my-0">
          <img src="" class="figure-img img-fluid rounded my-0" style="width:182px;height:182px;"  alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption position-absolute w-100 text-center" style="bottom:0;background-color:rgba(0,0,0,0.75);color:#ffffff;opacity:0.5;">Name</figcaption>
       </figure>
        </div>
        <div class="swiper-slide " style="width:auto;">     
        <figure class="figure position-relative my-0">
          <img src="" class="figure-img img-fluid rounded my-0" style="width:182px;height:182px;"  alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption position-absolute w-100 text-center" style="bottom:0;background-color:rgba(0,0,0,0.75);color:#ffffff;opacity:0.5;">Name</figcaption>
       </figure>
       </div>
        <div class="swiper-slide " style="width:auto;">     
        <figure class="figure position-relative my-0">
          <img src="" class="figure-img img-fluid rounded my-0" style="width:182px;height:182px;"  alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption position-absolute w-100 text-center" style="bottom:0;background-color:rgba(0,0,0,0.75);color:#ffffff;opacity:0.5;">Name</figcaption>
       </figure>
       </div>
    </div>

   
    <!-- 如果需要导航按钮 -->
      

    </div>
	 <div class="swiper-button-prev" style="left:-30px;"></div>
    <div class="swiper-button-next" style="right:-30px;"></div>
	  </div>

	  
	  </div>
	</div>
  </div>
</div>







<footer class="footer text-center text-truncate" >
Copyright © 2004 Adobe Systems Incorporated. All rights reserved.
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="/static/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>

var mySwiper = new Swiper ('.swiper-container', {
slidesPerView:'auto',
spaceBetween : 20,
    
    // 如果需要前进后退按钮
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
  })      

</script>
</body>
</html>