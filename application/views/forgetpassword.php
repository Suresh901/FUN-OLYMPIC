<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password| Advance Cyber Security</title>

    <style>
        .messages{
            color:red;
            text-align: center;
            font-size:20px;
        }
    </style>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="<?= base_url()?>forgetpassword/sendemail">
                        <h2 class="form-title">Change Password</h2>
                        
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Send"/>
                        </div>
                       
       
                    </form>
                    <p class="loginhere">
                        Redirect to <a href="<?= base_url()?>/login" class="loginhere-link">Login</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>
<script>
  $(document).ready(function (){
var verify_msg = '<?= $this->session->flashdata('msg')?>';

if(verify_msg !==''){

  var msg = jQuery.parseJSON(verify_msg);

  console.log(msg.type); 

         Swal.fire(
          msg.type,
          msg.eremail,
          msg.type,
        );
    }
  });
</script>
