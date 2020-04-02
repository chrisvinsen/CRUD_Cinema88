<?php
    include '../controller/movie_create_controller.php'; 

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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href="../assets/plugins/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <!-- <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Waves Effect Css -->
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Spinner Css -->
    <link href="../assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="../assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- Multi Select -->
    <link href="../assets/plugins/multi-select/css/multi-select.css" rel="stylesheet">

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

    <section class="content mb-5">
        <div class="container-fluid">
        	<h2 class="text-center animated lightSpeedIn">Post New Upcoming Movie</h2>
        	<form method="post" action="movie_create.php" enctype="multipart/form-data" class="animated bounceInUp" >
        		<div class="row">
	                <div class="form-group col-md-4">
                        <b>Movie Poster</b><br>
	                	<small>*This is only example image, you must put your image</small>
	                	<input type="file" name="movie_poster" class="form-control dropify" data-height="500" data-default-file="../assets/images/Default_Movie_Poster.jpg"> 
                        <small class="text-danger"><?php echo $movie_poster_err ?></small>
	                </div>
	                <div class="col-md-8">
	                	<div class="row">
	                		<div class="form-group col-md-12">
	                			<b>Title</b>
	                			<input type="text" name="title" class="form-control px-3" placeholder="Enter the Movie Title" value="<?php if(isset($_POST['title'])) echo $_POST['title']; ?>">
	                			<small class="text-danger"><?php echo $title_err ?></small>
	                		</div>
	                		<div class="form-group col-md-12">
			                	<b>Genre</b>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="action" name="genre[]" value="Action">
                                    <label class="form-check-label" for="action">Action</label>
                                    <input type="checkbox" class="form-check-input" id="drama" name="genre[]" value="Drama">
                                    <label class="form-check-label" for="drama">Drama</label>
                                    <input type="checkbox" class="form-check-input" id="fantasy" name="genre[]" value="Fantasy">
                                    <label class="form-check-label" for="fantasy">Fantasy</label>
                                    <input type="checkbox" class="form-check-input" id="thriller" name="genre[]" value="Thriller">
                                    <label class="form-check-label" for="thriller">Thriller</label>
                                    <input type="checkbox" class="form-check-input" id="sci-fi" name="genre[]" value="Sci-Fi">
                                    <label class="form-check-label" for="sci-fi">Sci-Fi</label>
                                    <input type="checkbox" class="form-check-input" id="comedy" name="genre[]" value="Comedy">
                                    <label class="form-check-label" for="comedy">Comedy</label>
                                    <input type="checkbox" class="form-check-input" id="romance" name="genre[]" value="Romance">
                                    <label class="form-check-label" for="romance">Romance</label>
                                    <input type="checkbox" class="form-check-input" id="horror" name="genre[]" value="Horror">
                                    <label class="form-check-label" for="horror">Horror</label>
                                    <input type="checkbox" class="form-check-input" id="adventure" name="genre[]" value="Adventure">
                                    <label class="form-check-label" for="adventure">Adventure</label>
                                    <input type="checkbox" class="form-check-input" id="history" name="genre[]" value="History">
                                    <label class="form-check-label" for="history">History</label>
                                    <input type="checkbox" class="form-check-input" id="musical" name="genre[]" value="Musical">
                                    <label class="form-check-label" for="musical">Musical</label>
                                    <input type="checkbox" class="form-check-input" id="science" name="genre[]" value="Science">
                                    <label class="form-check-label" for="science">Science</label>
                                </div>  
	                			<small class="text-danger"><?php echo $genre_err ?></small>
			                </div>
			                <div class="form-group col-md-6">
			                	<b>Release Date</b>
			                	<input type="date" name="release_date" class="form-control px-3" value="<?php if(isset($_POST['release_date'])) echo $_POST['release_date']; ?>">
	                			<small class="text-danger"><?php echo $release_date_err ?></small>
			                </div>
			                <div class="form-group col-md-6">
			                	<b>Duration</b>
			                	<input type="text" name="duration" class="form-control px-3" id="duration" placeholder="0h 0m" value="<?php if(isset($_POST['duration'])) echo $_POST['duration']; ?>">
	                			<small class="text-danger"><?php echo $duration_err ?></small>
			                </div>
			                <div class="form-group col-md-12">
			                	<b>Synopsis</b>
			                	<textarea name="synopsis" class="form-control px-3" rows="9" placeholder="Write the synopsis here."><?php if(isset($_POST['synopsis'])) echo $_POST['synopsis']; ?></textarea>
	                			<small class="text-danger"><?php echo $synopsis_err ?></small>
			                </div>
			                <div class="col-md-12">
                            	<button type="submit" class="btn btn-success float-right"><i class="fa fa-pencil"></i>  Post</button> 
							</div>
	                	</div>
	                </div>
	                
	            </div>
            </form>
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

    <!-- Sweet Alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>

    <script>
    	$(document).ready(function(){
            $('.dropify').dropify();
            $("#duration").mask("0h 0m");
    	})
    </script>

</html>