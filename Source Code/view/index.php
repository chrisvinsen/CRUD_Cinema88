<?php
    include '../controller/movie_show_controller.php';

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
    <!-- Fontawesome -->
    <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link href="../assets/plugins/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
	<!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="../assets/css/animate.css">
    <!-- Morris Chart Css-->
    <link rel="stylesheet" href="../assets/css/morris.css"/>
    <!-- Waves -->
    <link rel="stylesheet" href="../assets/css/waves.css"/>
    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/custom/custom.css">
    <!-- Themes -->
    <link rel="stylesheet" href="../assets/css/theme-red.css"/>
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <!-- Image Hover -->
    <link rel="stylesheet" href="../assets/plugins/imageRevealHover/css/base.css"/>

</head>
<body class="theme-red" style="margin-bottom: 275px">
    <div>
        <?php
            include 'top_bar.php';
            include 'left_bar.php';
        ?>
    </div>
    
    <section class="content">
        <div class="container-fluid">
            <div class="row p-3">
                <h2 class="animated bounceInRight">
                    MOVIE LISTS
                    <small>In <a href="index.php" class="font-weight-bold" style="text-decoration: none; color: #551A8B !important">U-Cinema</a></small>
                </h2>
                <?php
                    if($_SESSION['role'] == 1){
                ?>
                        <div class="page-header clearfix ml-auto d-block animated bounceInLeft">
                            <a href="movie_create.php" class="btn gradient-color pull-right text-light"><i class="fa fa-plus text-light"></i> Movie</a>
                        </div>
                <?php
                    }
                ?>
                        
            </div>

            <div class="table-responsive animated fadeInUp">
            	<table class="table table-bordered table-hover text-center">
				    <thead class="text-light gradient-color">
				        <tr>
				            <th class="text-center" width="50">No</th>
				            <th class="text-center">Title</th>
				            <th class="text-center">Genre</th>
				            <th class="text-center" width="200">Release Date</th>
				            <th class="text-center" width="150">Countdown</th>
				            <th class="text-center" width="125">Actions</th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php
		                    if(!empty($movies_data)){
		                    	$i = 1;
		                        foreach($movies_data as $movie){
		                ?>
		                			<tr>
							            <td data-fx="2"><a class="block__title" data-img="../assets/images/movies_poster/<?php echo $movie['poster'] ?>"><?php echo $i ?></a></td>
							            <td data-fx="2"><a class="block__title" data-img="../assets/images/movies_poster/<?php echo $movie['poster'] ?>"><?php echo $movie['title'] ?></a></td>
							            <td data-fx="2"><a class="block__title" data-img="../assets/images/movies_poster/<?php echo $movie['poster'] ?>"><?php echo $movie['genre'] ?></a></td>
							            <td data-fx="2"><a class="block__title" data-img="../assets/images/movies_poster/<?php echo $movie['poster'] ?>"><?php echo date_formatting($movie['release_date']) ?></a></td>
							            <td data-fx="2"><a class="block__title" data-img="../assets/images/movies_poster/<?php echo $movie['poster'] ?>"><?php echo time_elapsed_string($movie['release_date']) ?></a></td>
							            <td>
							            	<a href='movie_details.php?id=<?php echo $movie['movie_id']; ?>' title='View Record' style='text-decoration: none'><span class='fa fa-eye mx-1'></span> View More</a>
							            </td>
							        </tr>
		                <?php
		                	$i++;
		                        }
		                    }else{
                        ?>
                                <tr>
                                    <td colspan="6" class="text-center">No movie data available.</td>
                                </tr>
                        <?php
                            }
	                    ?>
				    </tbody>
				</table>
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
    <!-- <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script> -->

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="../assets/plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Dropify -->
    <script src="../assets/js/dropify.min.js"></script>

    <!-- Mask -->
    <script src="../assets/plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Image hover -->
    <script src="../assets/plugins/imageRevealHover/js/charming.min.js"></script>
    <script src="../assets/plugins/imageRevealHover/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/plugins/imageRevealHover/js/TweenMax.min.js"></script>
    <script src="../assets/plugins/imageRevealHover/js/demo.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>

    <?php
        if(isset($_SESSION['created'])){
    ?>         
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script> 
                $(document).ready(function(){
                    Swal.fire({
                      icon: 'success',
                      title: 'New Movie Added Successfully',
                      showConfirmButton: false,
                      timer: 1500
                    })
                })   
            </script>
    <?php
        unset($_SESSION['created']);
        }
    ?>

</html>