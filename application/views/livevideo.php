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
   <style type="text/css">
    .match_vs{

    text-align: center;
    font-size: 100px !important;
    margin-top: 0rem;
    font-style: italic;
     margin-left: -170px;
    }
    .team1{
        margin-top: 11rem;
        text-align: center;
        margin-left: -13px;
        }
          .custom-button {
  margin-right: 37px;
}

.navbar-nav .nav-link:hover {
  color: #ffffff !important;
}


.logo-container {
    width: 200px;
    height: 100px;
}

.logo-img {
    width: 154px;
    height: 159px;
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
    
      <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Live Games</h1>
            </div>
        </div>
  <div class="row" style="margin-left: 99px;">
    <?php foreach($live as $row): ?>
    <div class="col-12 col-md-4 p-5 mt-3">
        <a href="#" class="logo-link">
            <div class="logo-container">
                <img src="<?php echo base_url('assets/teamimages/'.$row->logo1)?>" class="img-fluid border logo-img">
            </div>
        </a>
         <div class="col-12 col-md-4 p-5 mt-3">
        <h3 class="team1"><?php echo $row->team1; ?></h3>
    </div>
    </div>
    <div class="col-12 col-md-4 p-5 mt-3">
        <div class="match_vs">vs</div>
        <div style="margin-top: 73px; margin-left: 29px;">
            <a href="<?= base_url()?>home/viewmatch" class="btn btn-primary btn-sm" style="color: #FFFFFF;">Watch Now</a>
             </div>
    </div>
    <div class="col-12 col-md-4 p-5 mt-3">
        <a href="#" class="logo-link">
            <div class="logo-container">
                <img src="<?php echo base_url('assets/teamimages/'.$row->logo2)?>" class="img-fluid border logo-img">

            </div>

        </a>
        <div class="col-12 col-md-4 p-5 mt-3">
        <h3 class="team1"><?php echo $row->team2; ?></h3>
    </div>
    </div>
    <?php endforeach ?>
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