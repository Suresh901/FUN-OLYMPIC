<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Fun Olympics 2023</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="<?= base_url()?>assets/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="<?= base_url()?>assets/css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="<?= base_url()?>assets/css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="<?= base_url()?>assets/css/custom.css">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="<?= base_url()?>assets/css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="<?= base_url()?>assets/js/3dslider.js"></script>
   <style>
  .full-width-video {
    width: 100%;
  }
 
</style>
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="<?= base_url()?>assets/images/loading-img.gif" alt="">
      </div>
      <!-- END LOADER -->
      <section id="top">
         <header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo"  >
                              <a href="index.html"><img src="<?= base_url()?>assets/images/logo.png" alt="#" style="width: 100px;"/></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           <!-- social icon -->
                           <ul class="social-icons pull-left">
                              <li><a class="facebook" href="#"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a></li>
                              <li><a class="twitter" href="#"><i class="fab fa-twitter fa-sm fa-fw me-2r"></i></a></li>
                              <li><a class="youtube" href="#"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a></li>
                             
                           </ul>
                           <!-- end social icon -->
                           <!-- button section -->
                          
  
                           <ul class="login">
                         
     
               </div>
                
            </div>

        </div>
                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                
                                 <nav class="navbar navbar-inverse">
                                    <div class="navbar-header">
                                       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       </button>
                                       <a class="navbar-brand" href="#">Menu</a>
                                    </div>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a href="<?= base_url()?>home/viewhome">Home</a></li>
                                          <li><a href="<?= base_url()?>home/aboutus">About</a></li>
                                          <li><a href="<?= base_url()?>home/watchlive">Live</a></li>
                                          <li><a href="<?= base_url()?>home/viewgallery">Gallery</a></li>
                                          <li><a href="<?= base_url()?>highlights/highlight">Highlights</a></li>
                                          <li><a href="<?= base_url()?>home/contactus">Contact</a></li>
                                       </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                    
                                 </nav>
                                 <?php 

                                        if ($data = $this->session->userdata('user')){  ?> 
  <button type="button" class="btn btn-info" class="btn btn-info dropdown-toggle" style="background-color: #ffffff; margin-left: 629px;
    margin-top: 13px;"> <a> <?php  echo $data->user_fullname ?> </a></button>
 <div class="dropdown-menu"></div>
 <a class="dropdown-item" href="<?= base_url()?>home/logout" onclick="return confirm('Are you sure want to Logout?')">LogOut</a> |
    <a class="dropdown-item" href="<?= base_url()?>Changepassword/changeoldpassword">Change Password</a>
  </div>
</div>
                                     <div> <?php  }  else {  ?>
                                        <div>
                                             <a href="<?= base_url()?>registration/usersignup" class="btn btn-primary btn-sm custom-button" style="color: #FFFFFF; margin-left: 643px;;
    margin-top: 13px;">Signup</a>
                                        </div>
                                        <div>
                                             <a href="<?= base_url()?>Login" class="btn btn-primary btn-sm" style="color: #FFFFFF; margin-left: 8px;;
    margin-top: 13px;">Login</a>
                                        </div>
                  
                    <?php } ?>
                           </div>
                           
                        </div>
                        
                     </div>
                     
                  </div>
               </div>
            </div>
         </header>
         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
      </section>
      <section id="contant" class="contant main-heading" style="padding-bottom:0;margin-bottom:-1px;position:relative;z-index:1;">
         <div class="aboutus">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                     <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="full">
                           <h3>About Us</h3>
                           <p>"Welcome to the Olympic Live Broadcast App! We are dedicated to bringing you the most immersive and comprehensive coverage of the Olympic Games right at your fingertips.

Our app is designed to deliver real-time updates, live streaming, and exclusive content from the Olympic Games, ensuring you never miss a moment of the action. Whether you're a passionate sports enthusiast, a dedicated fan of a particular nation or athlete, or simply someone who appreciates the power of global sporting events, our app is tailored to enhance your Olympic experience.
                           </p>
                           
                        </div>
                     </div>
                     <div class="col-md-5 col-sm-5 col-xs-12">
                        <img class="img-responsive" src="<?= base_url()?>assets/images/img1.jpg" alt="#" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="dark-section" style="<?= base_url()?>assets/background:url(images/walle.jpg)">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                     <div class="heading-main">
                        <h2>Our Testimonials</h2>
                     </div>
                     <div class="testimonial-slider">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                           <!-- Carousel Slides / Quotes -->
                           <div class="carousel-inner text-center">
                              <!-- Quote 1 -->
                              <div class="item active">
                                 <blockquote>
                                    <div class="row">
                                       <div class="col-sm-10 col-sm-offset-1">
                                          <p>"Success is no accident. It is hard work, perseverance, learning, studying, sacrifice, and most of all, love of what you are doing or learning to do."</p>
                                          <small>Pelé</small>
                                       </div>
                                    </div>
                                 </blockquote>
                              </div>
                              <!-- Quote 2 -->
                              <div class="item">
                                 <blockquote>
                                    <div class="row">
                                       <div class="col-sm-10 col-sm-offset-1">
                                          <p>"Sportsmanship for me is when a guy walks off the court and you really can't tell whether he won or lost, when he carries himself with pride either way." </p>
                                          <small>Jim Courier</small>
                                       </div>
                                    </div>
                                 </blockquote>
                              </div>
                              
                           <!-- Bottom Carousel Indicators -->
                           <ol class="carousel-indicators">
                              <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                              </li>
                              <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                              </li>
                              <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                              </li>
                           </ol>
                           <!-- Carousel Buttons Next/Prev -->
                           <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                           <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="full">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="#"><img src="<?= base_url()?>assets/images/logo.png" alt="#" /></a>
                        </div>
                        <p>Most of our events have hard and easy route choices as we are always keen to encourage new players.</p>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Contact us</h3>
                        <ul class="social-icons pull-left">
                              <li><a class="facebook" href="#"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a></li>
                              <li><a class="twitter" href="#"><i class="fab fa-twitter fa-sm fa-fw me-2r"></i></a></li>
                              <li><a class="youtube" href="#"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a></li>
                             
                           </ul>
                     </div>
                  </div>
               </div>
         <div class="footer-bottom">
            <div class="container">
               <p>Copyright © 2023 FunOlympic.All rights reserved.</p>
            </div>
         </div>
      </footer>
      <!-- ALL JS FILES -->
      <script src="<?= base_url()?>assets/js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="<?= base_url()?>assets/js/custom.js"></script>
   </body>
</html>