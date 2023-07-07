<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fun Olympic 2023 | Register</title>

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
                    <form method="POST" id="signup-form" class="signup-form" action="<?= base_url()?>changepassword/change">
                        <h2 class="form-title">Change Password</h2>
                        <div class="form-group">
                            <input type="password" class="form-input" name="oldpassword" id="oldpassword" placeholder="Old Password" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="New Password" required/>
                            <span id = "password-strength-status"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Confirm password" required/>                       
                        </div>                      
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Change" />
                        </div>
                    </form>
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
$(document).ready(function () {
   $("#re_password").on('keyup', function(){
    var password = $("#password").val();
    var repassword = $("#re_password").val();
    if (password != repassword){
      $('#submit').prop('disabled',true); 
     $(".failed").text("Password does not match !").css("color","red"); 
      $(this).css("border-color",'red');

    }
    else{
      $('#submit').prop('disabled',false); 
      $(".failed").text('');
      $(this).css("border-color",'green');
    }
         
   });
});
$(document).ready(function () {
  $("#password").on('keyup', function(){
    var number = /([0-9])/;
    var alphabets = /([a-zA-Z])/;
    var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
    if ($('#password').val().length < 8) {
        $('#password-strength-status').removeClass();
        $('#password-strength-status').addClass('weak-password');
        $('#password-strength-status').html("Weak Password <br/>(Make sure your password is at least 8-12 characters long and includes a mix of upper and lower case letters, numbers, and symbols..)").css("color", "red");
        $('#submit').prop('disabled',true); 
    } else {
        if ($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {
          $('#submit').prop('disabled',false); 
            $('#password-strength-status').removeClass();
            $('#password-strength-status').addClass('strong-password');
            $('#password-strength-status').html("Strong Password").css("color", "green");
        } else {
            $('#password-strength-status').removeClass();
            $('#password-strength-status').addClass('medium-password');
            $('#password-strength-status').html("Medium <br/>(Include a mix of upper and lower case letters, numbers, symbols, and special characters.)");
            $('#submit').prop('disabled',true); 
        }
    }
  });
});
</script>
<script>
  $(document).ready(function (){
    var msg = "<?= $this->session->flashdata('message')?>";
    if(msg !==''){
         Swal.fire(
  'Success!',
   msg,
  'success',
);
    }
  });
</script>