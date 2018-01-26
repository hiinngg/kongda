<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"D:\wamp3\wamp64\www\kongda\public/../application/index\view\index\products.html";i:1516761205;s:66:"D:\wamp3\wamp64\www\kongda\application\index\view\indexlayout.html";i:1516701471;}*/ ?>
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


.nav-pills .nav-link{
border-radius:0;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
background: #f08200;
}
.btn-outline-secondary {
    color: #707070;
    background-color:#ededed;
    background-image: none;
    border-color: #eee;
}
.btn-outline-secondary:hover,.btn-outline-secondary:active{
    color: #fff !important;
    background-color:  #f08200 !important;
    border-color: #ECECEC !important;
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
        <a class="nav-link hvr-fade   p-md-4" href="<?php echo url('index'); ?>">HOME</a>
      </li>
      <li class="nav-item text-center  " style="">
        <a class="nav-link hvr-fade p-md-4 active" href="<?php echo url('products'); ?>">PRODUCTS</a>
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


<div class="container bg-white pb-3">
<h1>LED MODULE</h1>
<hr></hr>
<div class="row ">

<div class="col-md-3">
	 <div class="nav flex-column nav-pills rounded bg-dark text-white" id="v-pills-tab" role="tablist" aria-orientation="vertical"  style="">
	  <a class="nav-link orange rounded-top text-white"  href="#">LED Module</a>
	  <a class="nav-link active text-white" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
	  <a class="nav-link text-white" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
	  <a class="nav-link text-white" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
	  <a class="nav-link text-white" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
	</div>
</div>

<div  class="col-md-9">
	<div class="tab-content  " id="v-pills-tabContent">
	  <div class="tab-pane fade show active  " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
	  
	  <div class="list w-100 d-flex align-item-center flex-wrap justify-content-center mt-3 mt-md-0  justify-content-md-start justify-content-sm-start">
	  
	    <div class="p-detail d-flex flex-column align-item-center text-center mb-3 mr-3 " data-pid="1" style="width:182px;">
	     <img src=""  style="width:182px;height:182px;" alt="" />
	     <h4>Name</h4>
	     <button type="button" class="btn btn-outline-secondary">Detail</button>
	  </div>
	  
	   <div class="d-flex flex-column align-item-center text-center mb-3 mr-3" style="width:182px;">
	     <img src=""  style="width:182px;height:182px;" alt="" />
	     <h4>Name</h4>
	     <button type="button" class="btn btn-outline-secondary">Detail</button>
	  </div>
	   <div class="d-flex flex-column align-item-center text-center mb-3 mr-3" style="width:182px;">
	     <img src=""  style="width:182px;height:182px;" alt="" />
	     <h4>Name</h4>
	     <button type="button" class="btn btn-outline-secondary">Detail</button>
	  </div>
	   <div class="d-flex flex-column align-item-center text-center mb-3 mr-3" style="width:182px;">
	     <img src=""  style="width:182px;height:182px;" alt="" />
	     <h4>Name</h4>
	     <button type="button" class="btn btn-outline-secondary">Detail</button>
	  </div>
	   <div class="d-flex flex-column align-item-center text-center mb-3 mr-3" style="width:182px;">
	     <img src=""  style="width:182px;height:182px;" alt="" />
	     <h4>Name</h4>
	     <button type="button" class="btn btn-outline-secondary">Detail</button>
	  </div>
	  </div>
	  
	
	  </div>
	  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
	  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
	  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
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

$(".list").on("click",".p-detail",function(){
var pid=$(this).attr("data-pid");
location.href="/index/index/productdetail?pid="+pid;

})


</script>
</body>
</html>