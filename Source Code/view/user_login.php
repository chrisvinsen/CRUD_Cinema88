<?php
	include '../controller/user_login_controller.php'; //Session started

	if(isset($_SESSION['email'])){
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>U-Cinema</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon-->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images//favicon.ico" type="image/x-icon">

	<!-- Styles -->

	<!-- Fontawesome -->
    <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link href="../assets/plugins/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- Custom -->
	<link rel="stylesheet" href="../assets/css/custom/authentication.css">

</head>
<body>
	<div class="wrapper">
		<div class="inner">
			<img src="../assets/images/Launch 2.png" alt="" class="animated bounceInUp image-1" id="r_image_1">
			<form class="animated jackInTheBox" action="user_login.php" method="post">
				<h3 class="font-weight-bold">Log In?</h3>
				<div class="form-holder">
					<div style="width:100%; position: relative;">
						<span class="fa fa-user"></span>
						<input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
					</div>
					<span style="color: #FF0000; position:static"><?php echo $email_err ?></span>
				</div>
				<div class="form-holder">
					<div style="width:100%; position: relative;">
						<span class="fa fa-lock"></span>
						<input type="password" class="form-control" placeholder="Password" id="password" name="password">
					</div>
					<span style="color: #FF0000; position:static"><?php echo $pass_err ?></span>
				</div>
				<span style="color: #FF0000; position:static"><?php echo $messages ?></span>
				<button type="submit" name="submit" value="Submit">
					<span>Log In</span>
				</button>
				
				<span class="float-right my-2"><b>Don't have an account? <a href="user_register.php" style="text-decoration: none; color: #551A8B !important">Register Now</b><a></span>
			</form>
			<img src="../assets/images/Log in.png" alt="" class="animated bounceInRight image-2" width="65%;" id="r_image_2">
		</div>
		
	</div>
	<!-- Script -->

	<!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>
</body>
</html>