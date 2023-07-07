<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password| Advance Cyber Security</title>

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
            
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="<?= base_url()?>changepassword/changepassword">
                        <h2 class="form-title">Change Password</h2>
                        
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required/>
                            <span id = "password-strength-status"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Confirm password" required/>
                            <span class="failed"></span>                         
                        </div>                      
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Change Password"/>
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
        $('#password-strength-status').html("Weak (should be atleast 8 characters.)").css("color", "red");
        $('#submit').prop('disabled',true); 
    } else {
        if ($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {
          $('#submit').prop('disabled',false); 
            $('#password-strength-status').removeClass();
            $('#password-strength-status').addClass('strong-password');
            $('#password-strength-status').html("Strong").css("color", "green");
        } else {
            $('#password-strength-status').removeClass();
            $('#password-strength-status').addClass('medium-password');
            $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters or some combination.)");
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
