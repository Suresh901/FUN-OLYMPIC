<!DOCTYPE html>
<html lang="en">

<head>
    <title>Live</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?= base_url()?>assets/images/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/images/logo.png">

    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/templatemo.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/fontawesome.min.css">
<style type="text/css">
    .match_vs{

    text-align: center;
    font-size: 100px !important;
    margin-top: 0rem;
    font-style: italic;
     margin-left: -170px;
    }
    .team1{
        margin-top: 1rem;
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

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:funolympic@gmail.com">funolympic@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:+9779822851816">+9779822851816</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
   <nav class="navbar navbar-expand-lg navbar-light shadow sticky-top" style="background-color: #5dc4c3;">
        <div class="container d-flex justify-content-between align-items-center">
         <img  src="<?= base_url()?>assets/images/logo.png" alt="Logo" height="40" width="70">
            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                FunOlympic
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url()?>home/viewhome">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url()?>home/aboutus">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url()?>home/viewgallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url()?>home/watchlive">Live</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url()?>home/contactus">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url()?>highlights/showhighlight">Highlights</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
<div class="btn-group">
     <?php 

                                        if ($data = $this->session->userdata('user')){  ?> 
  <button type="button" class="btn btn-info" style="background-color: #ffffff;"> <i class="fas fa-user-circle"></i>  <a> <?php  echo $data->user_fullname ?> </a></button>
  <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>

  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="<?= base_url()?>home/logout" onclick="return confirm('Are you sure you want to Logout?')">Logout</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Change Password</a></li>
  </ul>
</div>
                                     <div> <?php  }  else {  ?>
                                        <div>
                                             <a href="<?= base_url()?>registration/signup" class="btn btn-primary btn-sm custom-button" style="color: #FFFFFF;">Signup</a>
                                        </div>
                                        <div>
                                             <a href="<?= base_url()?>Login" class="btn btn-primary btn-sm" style="color: #FFFFFF;">Login</a>
                                        </div>
                  
                    <?php } ?>
               </div>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


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


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Fun Olympics</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Address
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:+9779822851816">+9779822851816</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">funolympic@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Our Services</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Live Games</a></li>
                        <li><a class="text-decoration-none" href="#">Gallery</a></li>
                        <li><a class="text-decoration-none" href="#">Highlights</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Live</a></li>
                        <li><a class="text-decoration-none" href="#">Gallery</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

         
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 Fun Olympic
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="<?= base_url()?>assets/user/js/jquery-1.11.0.min.js"></script>
    <script src="<?= base_url()?>assets/user/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?= base_url()?>assets/user/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>assets/user/js/templatemo.js"></script>
    <script src="<?= base_url()?>assets/user/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>