<?php
	include '../controller/user_register_controller.php'; //Session start

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
			<img src="../assets/images/Log in 2.png" alt="" class="image-1 animated bounceInLeft" id="r_image_1">
			<form action="user_register.php" method="post" class="animated jackInTheBox">
				<h3 class="font-weight-bold">New Account?</h3>
				<div class="form-holder">
					<div style="width:100%; position: relative;">
						<span class="fa fa-user"></span>
						<input type="text" name="email" class="form-control" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
					</div>
					<span style="color: #FF0000; position:static"><?php echo $email_err ?></span>
				</div>
				<div class="form-holder">
					<div style="width:100%; position: relative;">
            			<span class="fa fa-user"></span>
            			<select class="form-control" name="role" id="role">
						<?php
            				if($stmt_role->rowCount() > 0){
            					echo '<option value="" disabled selected>Choose your role</option>';
			                    while($row = $stmt_role->fetch()){
			                    	echo "<option value='" . $row['role_id'] ."'>" . $row['nama_role'] ."</option>";
			                    }
			                }
						?>
			            </select>
					</div>
					<span style="color: #FF0000; position:static"><?php echo $role_err ?></span>
				</div>
				<div class="form-holder">
					<div style="width:100%; position: relative;">
						<span class="fa fa-lock"></span>
						<input type="password" name="password" class="form-control" placeholder="Password" value="">
					</div>
					<span style="color: #FF0000; position:static"><?php echo $password_err ?></span>
				</div>
				<div class="form-holder">
					<div style="width:100%; position: relative;">
						<span class="fa fa-lock"></span>
						<input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" value="">
					</div>
					<span style="color: #FF0000; position:static"><?php echo $cpassword_err ?></span>
				</div>
				<button type="submit" name="submit" value="Submit">
					<span>Register</span>
				</button>
				<span class="float-left my-2"><b>Already have an account? <a href="user_login.php" style="text-decoration: none; color: #551A8B !important">Log in now</b><a></span>
			</form>
			<img src="../assets/images/Delivery 2.png" alt="" class="image-2 animated bounceInRight" id="r_image_2">
		</div>
		
	</div>


	<!-- Script -->

	<!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>
</body>

</html>