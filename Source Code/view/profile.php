<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header("Location: user_login.php");
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

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet"> -->

    <!-- Waves Effect Css -->
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="../assets/plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="../assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="../assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- Dropify -->
    <link href="../assets/css/dropify.min.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Themes -->
    <link rel="stylesheet" href="../assets/css/theme-red.css"/>



</head>
<body class="theme-red">

    <div>
        <?php
            include 'top_bar.php';
            include 'left_bar.php';
        ?>
    </div>

    <section class="content">
        <div class="container-fluid">
		    <div class="row my-2">
		    	<div class="col-lg-4 text-center animated bounceInRight">
		            <img src="../assets/images/Sen.png" class="rounded img-thumbnail mx-auto d-block my-4" alt="avatar" width="75%">
		        </div>
		        <div class="col-lg-8 animated bounceInUp">
		            <div class="tab-content py-4">
	                    <h3 class="mb-3">Profile Details</h3>
	                    <div class="row">
	                        <div class="col-md-6">
	                            <h6>Name</h6>
	                            <p>
	                                Christianto Vinsen Budijanto
	                            </p>
	                            <h6>NIM</h6>
	                            <p>
	                                00000028917
	                            </p>
	                            <h6>Major</h6>
	                            <p>
	                                Informatics - 2018
	                            </p>
	                        </div>
	                        <div class="col-md-6">
	                            <h6>Class Code</h6>
	                            <a href="#" class="badge badge-danger badge-pill">Web Programming - DL</a>
	                        </div>
	                        <div class="col-md-12">
	                            <h4 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Contact Details</h4>
	                            <table class="table table-sm table-hover table-striped">
	                                <tbody>                                    
	                                    <tr>
	                                        <td>
                                                <a href="tel: 082221981945" style="text-decoration: none">
	                                               <strong>PHONE NUMBER : </strong> 08222 198 1945
                                                </a>
	                                        </td>
	                                    </tr>
                                        <tr>
                                            <td>
                                                <a href="mailto:christianto.vinsen@student.umn.ac.id?Subject=Hello%20Sen" target="_top" style="text-decoration: none;">
                                                    <strong>EMAIL : </strong> christianto.vinsen@student.umn.ac.id
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.linkedin.com/in/christianto-vinsen-budijanto-ab3043196/" style="text-decoration: none;">
                                                    <strong>LINKED IN : </strong>
                                                    Christianto Vinsen B.
                                                </a>
                                            </td>
                                        </tr>
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>
	                    <!--/row-->
		            </div>
		        </div>
		    </div>
        </div>
    </section>


</body>
	<!-- Script -->

    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="../assets/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="../assets/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="../assets/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="../assets/plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Dropify -->
    <script src="../assets/js/dropify.min.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>

</html>