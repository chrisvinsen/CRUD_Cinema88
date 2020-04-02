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
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Themes -->
    <link rel="stylesheet" href="../assets/css/theme-red.css"/>
</head>
<body>
    <nav class="navbar animated fadeInDown">
        <div class="container-fluid">
            <div class="navbar-header w-100">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand text-left ml-3 mr-0 w-100" href="index.php" style="font-size: 21px">U-Cinema <span class="float-right mt-2" style="font-size: 15px">Welcome, <?php echo $_SESSION['user'] ?></span></a>
            </div>
        </div>
    </nav>

</body>
	<!-- Script -->
    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>


    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>

</html>