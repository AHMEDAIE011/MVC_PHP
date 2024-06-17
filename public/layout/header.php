<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>New Create - Agency</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= PATH; ?>front/assets/img/favicon.png" rel="icon">
  
  <!-- <link href="<?= PATH; ?>front/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->        
  <link href="<?= PATH; ?>front/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= PATH; ?>front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= PATH; ?>front/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= PATH; ?>front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= PATH; ?>front/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= PATH; ?>front/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= PATH; ?>front/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
#topbar .contact-info i {
    color: #138fb1fa;
    }
    .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover>a {
    background: #00c6ff;}
    #hero .btn-get-started:hover {
    background: #00c6ff;
    border-color: #00c6ff;}
    .back-to-top a{   
       background: #00c6ff;   
        color: #00c6ff;
}
.MISSION{   
    margin-top: 37px;
}
 .misson-img{   
   margin-top:-100px ;
   max-width: 75%;
}
.about{
  padding: 60px 0 0;
}
.why-us .box:hover  {
  background: #00c6ff;
}
.why-us .box span {
  color: #00c6ff;
}

@media (max-width: 992px) {

  .misson-img{   
  
   position: absolute;
  height: 300px;
  left: 30%;
}
.div-photo{
  position: relative;
  padding: 9% 0;
}
.row-media{
  margin-top: 60px;
}
}
@media (max-width: 575px) {

  .misson-img{   
   position: absolute;
   height: 245px;
    left: 20%;
}
.div-photo{
  position: relative;
  padding: 9% 0;
}
}


  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="aie79094@gmail.com">Newcreateagency@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> 01553833368
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="<?= PATH; ?>" class="logo"><img src="<?= PATH; ?>front/assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= PATH; ?>home#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= PATH; ?>home#about">About</a></li>
          <li><a class="nav-link scrollto" href="<?= PATH; ?>home#services">Services</a></li>
          <li><a class="nav-link scrollto " href="<?= PATH; ?>home#portfolio">Portfolio</a></li>
        
          <li><a class="nav-link scrollto" href="<?= PATH; ?>home#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= PATH; ?>home#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
