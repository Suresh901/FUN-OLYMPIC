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
                                          <li class="active"><a href="index.html">Home</a></li>
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
         <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
               </ol>
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000" style="margin-top: 20px;">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                           <h3>Beyond Borders, Beyond Limits</h3>
                              <p>The Olympic Games bring together athletes from diverse backgrounds, who set aside differences and come together to compete, inspire, and celebrate the shared values of excellence, friendship, and fair play. It showcases the human potential to surpass limitations, whether they are physical, societal, or personal, as athletes push themselves to new heights and defy what was once considered impossible. The Olympic Games exemplify the unifying spirit of humanity, reminding us that we are bound not by borders but by our shared love for sport, our collective pursuit of greatness, and the belief that together we can overcome any obstacle.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                  <!-- Second slide -->
                  <div class="item skyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                           <h3>Determination, Discipline, Victory</h3>
                              <p>
                              "Determination, Discipline, Victory: Witnessing the Triumph of Olympic Athletes" 
                              encapsulates the incredible journey of Olympic athletes. 
                              It recognizes their unyielding determination, unwavering discipline, 
                              and the triumphant moments that mark their exceptional achievements. 
                              Through their inspiring stories, these athletes ignite the spirit of 
                              determination within us all, reminding us that with unwavering commitment 
                              and perseverance, we too can strive for greatness and achieve our own victories in life.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                  <!-- Third slide -->
                  <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                           <h3>Determination, Discipline, Victory</h3>
                              <p>
                              "Determination, Discipline, Victory: Witnessing the Triumph of Olympic Athletes" 
                              encapsulates the incredible journey of Olympic athletes. 
                              It recognizes their unyielding determination, unwavering discipline, 
                              and the triumphant moments that mark their exceptional achievements. 
                              Through their inspiring stories, these athletes ignite the spirit of 
                              determination within us all, reminding us that with unwavering commitment 
                              and perseverance, we too can strive for greatness and achieve our own victories in life.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
               </div>
               <!-- /.carousel-inner -->
               <!-- Controls -->
               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
         <section class="video_section_main theme-padding middle-bg vedio">
            <h1>Introduction of Olympic</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="match_vedio">
            <video class="img-responsive" src="<?= base_url()?>assets/images/video.mp4" alt="#" autoplay muted></video>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      </section>
      <div class="matchs-info">
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
               <div class="full">
                  <div class="matchs-vs">
                     <div class="vs-team">
                        <div class="team-btw-match">
                           <ul>
                              <li>
                              <?php foreach($schedule as $row): ?>
                                <img src="<?php echo base_url('assets/teamimages/'.$row->logo1)?>">
                                 <span><?php echo $row->team1; ?></span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                              <img src="<?php echo base_url('assets/teamimages/'.$row->logo2)?>">
                                 <span><?php echo $row->team2; ?></span>
                              </li>
                           </ul>
                           <?php endforeach ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <h1>Match Schedule</h1>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
               <div class="full">
                  <div class="right-match-time">
                     <h2>Next Match</h2>
                     <ul id="countdown-1" class="countdown">
                     <h3 class="date">Date: <?php echo $row->date; ?></h3>
        <h3 class="date">Venue: <?php echo $row->venue; ?></h3>
        <h3 class="date"><?php
                      $convertedTime = date('h:i A', strtotime($row->time));
                      echo $convertedTime;
                      ?></h3>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      

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