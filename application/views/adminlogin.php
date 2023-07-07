<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url()?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?><?= base_url()?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?><?= base_url()?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/main.css">
<!--===============================================================================================-->
<style>
/* .error{
	color: red;
	text-align: center;
	margin-top: 10px;
} */
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<a class="logo"><img src="<?= base_url()?>assets/images/logo.png" alt="IMG"></a>
				</div>

				<form class="login100-form validate-form" method = "POST" action="<?= base_url()?>adminlogin/adlogin">
					<span class="login100-form-title">
						Admin Login
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid username is required">
						<input class="input100" type="text" name="ad_username" placeholder="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="ad_password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
				<button  class='login100-form-btn'type = 'submit' name = 'login' class= 'button'>
					Login
				</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->	
	<script src="<?= base_url()?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1
		})
	</script> -->
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</body>
</html>
<script>
	$(document).ready(function (){
    var er = "<?= $this->session->flashdata('er')?>";
    if(er !==''){
         Swal.fire(
  'Error!',
   er,
  'error',
);
    }
  });
</script>

<script>
  $(document).ready(function (){
    var error = "<?= $this->session->flashdata('error')?>";
    if(error !==''){
         Swal.fire(
  'error!',
   error,
  'error',
);
    }
  });
  </script>
