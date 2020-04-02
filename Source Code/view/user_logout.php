<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Say Helloo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">

		<!-- Favicon-->
    	<link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    	<link rel="icon" href="../assets/images//favicon.ico" type="image/x-icon">

	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="../assets/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../assets/css/custom/authentication.css">
    	<link rel="stylesheet" href="../assets/css/animate.css">

	</head>

	<body>
		<div class="wrapper" id="wrapper_register">
			<div class="inner">
				<img src="../assets/images/cherry-bad-gateway.png" alt="" class="image-1 animated zoomInLeft" id="r_image_1">
				<form action="../controller/user_logout_controller.php" class="animated wobble">
					<h3 class="font-weight-bold">Are you sure want to Logout?</h3>
					
					<button type="submit">Log Out</button>
					<span class="float-right my-2"><b>Back to <a href="index.php" style="text-decoration: none; color: #551A8B !important">Home</b><a></span>
				</form>
			</div>
			
        </div>
	</div>
		 
	<!-- Script -->
	
    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

	</body>
</html>
<script type="text/javascript"> 
		$(document).ready(function(){ 
 			$('#myModal').modal({ 
    			keyboard: false, 
 				show: true, 
 				backdrop: 'static' 
    		}); 
		}); 
	</script> 