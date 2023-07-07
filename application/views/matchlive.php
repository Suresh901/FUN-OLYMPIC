<!DOCTYPE html>
<html lang="en">

<head>
    <title>Live Games</title>
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

        .des{
        margin-top: 2rem;
        text-align: Left;
        font-size: 20px !important;
        }

    .full-screen-overlay {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }

  .full-screen-image {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-height: 90vh;
    max-width: 90vw;
  }

  .close-button {
    position: absolute;
    top: 20px;
    right: 20px;
    color: #fff;
    font-size: 24px;
    cursor: pointer;
  }

  .next-button {
    position: absolute;
    top: 50%;
    right: 20px;
    color: #fff;
    font-size: 48px;
    cursor: pointer;
    transform: translateY(-50%);
  }

  .image-container {
    height: 267px; /* Adjust the height as needed */
    width: 326px; /* Adjust the width as needed */
    overflow: hidden;
  }

  .image-container img {
    height: 100%;
    width: 100%;
  }

  .custom-button {
  margin-right: 37px;
}
.navbar-nav .nav-link:hover {
  color: #ffffff !important;
}

#chatbox {
      height: 400px;
      overflow-y: auto;
      border: 1px solid #ccc;
      padding: 10px;
    }
    #message {
        width: 79%;
      padding: 5px;
    }
    #sendBtn {
        padding: 9px;
    margin-top: 0px;
    }

    .username {
    font-weight: bold;
    font-size: 16px;
}

.message-text {
    font-size: 14px;
}

p.live-chat-heading {
  margin-left: 113px;
  font-weight: bold !important;
  font-size: 20px !important;
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
         <img  src="<?= base_url()?>assets/images/logo.png" alt="AdminLTELogo" height="40" width="70">
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
  <button type="button" class="btn btn-info" style="background-color: #ffffff;"> <i class="fas fa-user-circle"></i> <a> <?php  echo $data->user_fullname ?> </a></button>
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


<section class="container py-5">
      <p style="text-align: center; color: red; font-size: 18px; margin-right: 311px; margin-top: -44px" >Live Game</p>
    <?php
    if (!$this->session->userdata('user')) {
        ?>
        <p style="text-align: center; color: #4d0bdf; font-size: 18px; margin-left: 786px; margin-top: -44px">Please Login / Signup to Join Live Chat</p>
    <?php } ?>
    <div class="row">
        <div class="col-md-6 order-md-1 mb-4">
            <div class="video-container">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="800" height="450" src="https://crichdplayer.xyz/embed2.php?id=eurosp1&q=Eurosport" frameborder="0" scrolling="no" allowfullscreen></iframe>
                </div>
            </div>
        </div><?php
         if ($data = $this->session->userdata('user')){  ?> 
        <div class="col-md-6 order-md-2">
            <div class="chat-box"  style="margin-left: 271px;margin-top: -8px;">
                <p class="live-chat-heading">Live Chat</p>
                <!-- Chat messages will be displayed here -->
                <div  id="chatbox"></div>
                <input type="text" id="message" placeholder="Type your message..." />
                <!-- Button to send the message -->
                <button id="sendBtn" class="btn btn-primary btn-sm">Send</button>
            </div>
        </div>
<?php } ?>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
  $(document).ready(function() {
var lastDisplayedMessageId = null;
var deletedMessageIds = [];

var lastDisplayedMessageId = null;
var deletedMessageIds = []; // Array to store the deleted message IDs

function fetchMessages() {
  $.ajax({
    url: '<?php echo base_url("home/fetch_messages"); ?>',
    type: 'GET',
    dataType: 'json',
    success: function(response) {
      if (response.success) {
        $.each(response.resdata, function(key, val) {
          // Check if the message's ID is greater than the last displayed message's ID
          if (lastDisplayedMessageId === null || val.id > lastDisplayedMessageId) {
            var messageId = 'message-' + val.id; 
            if (deletedMessageIds.includes(messageId)) {
              return; // Skip this message if it is deleted
            }
            
            var chatMessage = '<div class="message">' +
              '<div class="message-content">' +
              '<span class="username">' + val.user_name + ': </span>' +
              '<span class="message-text">' + val.message + '</span>' +
              '</div>' +
              '</div>';
              
            $('#chatbox').append(chatMessage);
            $('#chatbox').append('<hr>');
            lastDisplayedMessageId = val.id; // Update the last displayed message's ID
          }
        });

        $('#chatbox').scrollTop($('#chatbox')[0].scrollHeight); // Auto-scroll to the bottom
      } else {
        console.log(response.error);
      }
    },
    error: function(xhr, status, error) {
      console.log(error);
    }
  });
}






    // Send a chat message to the server
    $('#sendBtn').click(function() {
      var message = $('#message').val().trim(); // Get the message from the input field

      if (message !== '') {
        // Make an AJAX request to the server
        $.ajax({
          url: '<?php echo base_url("home/sendmessage"); ?>', // Replace 'your_controller' with the actual controller name and method
          method: 'POST',
          data: {
            message: message
          },
          success: function(response) {
            // Handle the success response if needed
          },
          error: function(xhr, status, error) {
            // Handle the error if needed
          }
        });

        // Clear the input field
        $('#message').val('');
      }
    });

    // Handle Enter key press event in the message input field
    $('#message').keypress(function(e) {
      if (e.which === 13) {
        var message = $(this).val().trim();
        if (message !== '') {
          // Send the message
          $('#sendBtn').click();
        }
        return false;
      }
    });

    // Periodically fetch new chat messages every 5 seconds
    setInterval(fetchMessages, 2000);
  });
</script>


</body>

</html>