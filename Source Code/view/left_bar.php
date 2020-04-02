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
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

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
<body>
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar mt-2" >
            <!-- User Info -->
            <div class="animated fadeInDown">
                <div class="user-info">
                    <div class="image">
                        <img src="../assets/images/user.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user']?></div>
                        <div class="email"><?php echo $_SESSION['email'] ?></div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="navigation active">
                            <a href="index.php">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="navigation">
                            <a href="profile.php">
                                <i class="material-icons">assignment</i>
                                <span>Coder's Profile</span>
                            </a>
                        </li>
                        <li class="navigation">
                            <a href="user_logout.php">
                                <i class="material-icons">donut_large</i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2020 <a href="index.php">U-CINEMA</a>.
                    </div>
                    <div class="version">
                        <b>Christianto Vinsen</b> - 28917
                    </div>
                </div>
                <!-- #Footer -->
            </div>
        </aside>
        <!-- #END# Left Sidebar -->
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

    <!-- Dropify -->
    <script src="../assets/js/dropify.min.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>

</html>