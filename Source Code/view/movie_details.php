<?php
    include '../controller/movie_details_controller.php';
    include '../controller/movie_edit_controller.php';

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
    <!-- <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

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
        <div class="container-fluid animated bounceInUp">
		    <div class="row my-2">
		    	<div class="col-lg-4 text-center">
		            <img src="../assets/images/movies_poster/<?php echo $movie_data['poster'] ?>" class="mx-auto d-block p-4" alt="avatar" width="90%" onerror="if (this.src != '../assets/images/Default_Movie_Poster.jpg') this.src = '../assets/images/Default_Movie_Poster.jpg';">
                    <?php
                        if($_SESSION['role'] == 1 || $_SESSION['role'] == 2){
                    ?>  
                        <input type="hidden" id="id_movie" value="<?php echo $movie_data['movie_id']; ?>" >
                        <button class="btn btn-danger" id="delete_movie">DELETE MOVIES</button>
                    <?php
                        }
                    ?>
		        </div>
		        <div class="col-lg-8">
                    <ul class="nav nav-tabs justify-content-around" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#details" data-toggle="tab" style="text-decoration: none;">
                                <i class="material-icons">face</i> DETAILS
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#synopsis" data-toggle="tab" style="text-decoration: none;">
                                <i class="material-icons">home</i> SYNOPSIS
                            </a>
                        </li>
                        <?php 

                            if($_SESSION['role'] == 1){
                        ?>

                            <li role="presentation">
                                <a href="#edit" data-toggle="tab" style="text-decoration: none;">
                                    <i class="material-icons">settings</i> EDIT
                                </a>
                            </li>

                        <?php
                            }

                        ?>
                                
                    </ul>
		            <div class="tab-content py-4">
		                <div role="tabpanel" class="tab-pane active" id="details">
		                    <h3 class="mb-3">Movie Details</h3>
		                    <div class="row">
		                        <div class="col-md-6">
		                            <h6>ID</h6>
		                            <p>
		                                <?php echo $movie_data['movie_id'] ?>
		                            </p>
		                            <h6>Title</h6>
		                            <p>
                                        <?php echo $movie_data['title'] ?>
		                            </p>
		                        </div>
		                        <div class="col-md-6 text-light">
                                    <?php
                                        if(!empty($genres)){
                                            echo "<h6 class='text-dark'>Genre</h6>";
                                            foreach($genres as $genre){
                                                if($genre == 'Drama')
                                                    echo "<a class='badge badge-pill' style='background-color: red; margin: 0 3px;'>$genre</a>";
                                                else if($genre == 'Fantasy')
                                                    echo "<a class='badge badge-pill' style='background-color: purple; margin: 0 3px;'>$genre</a>";
                                                else if($genre == 'Thriller')
                                                    echo "<a class='badge badge-pill' style='background-color: orange; margin: 0 3px;'>$genre</a>";
                                                else if($genre == 'Sci-Fi')
                                                    echo "<a class='badge badge-pill' style='background-color: green; margin: 0 3px;'>$genre</a>";
                                                else if($genre == 'Comedy')
                                                    echo "<a class='badge badge-pill' style='background-color: blue; margin: 0 3px;'>$genre</a>";
                                                else if($genre == 'Action')
                                                    echo "<a class='badge badge-pill' style='background-color: black; margin: 0 3px;'>$genre</a>";
                                                else if($genre == 'Romance')
                                                    echo "<a class='badge badge-pill' style='background-color: red; margin: 0 3px;'>$genre</a>";
                                                else if($genre == 'Horror')
                                                    echo "<a class='badge badge-pill' style='background-color: gray; margin: 0 3px;'>$genre</a>";
                                                else if($genre == 'Adventure')
                                                    echo "<a class='badge badge-pill' style='background-color: brown; margin: 0 3px;'>$genre</a>";
                                                else if($genre == 'History')
                                                    echo "<a class='badge badge-pill' style='background-color: gray; margin: 0 3px;'>$genre</a>";
                                                else if($genre == 'Musical')
                                                    echo "<a class='badge badge-pill' style='background-color: green; margin: 0 3px;'>$genre</a>";
                                                else if($genre == 'Science')
                                                    echo "<a class='badge badge-pill' style='background-color: orange; margin: 0 3px;'>$genre</a>";
                                                else
                                                    echo "<a class='badge badge-pill' style='background-color: gray; margin: 0 3px;'>$genre</a>";
                                            }
                                        }
                                    ?>
		                        </div>
		                        <div class="col-md-12">
		                            <h4 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Date and Time Details</h4>
		                            <table class="table table-sm table-hover table-striped">
		                                <tbody>                                    
		                                    <tr>
		                                        <td>
		                                            <strong>Released on </strong> <?php echo $movie_data['release_date'] ?>
		                                        </td>
		                                    </tr>
		                                    <tr>
		                                        <td>
		                                            <strong>Duration </strong> <?php echo $movie_data['duration'] ?>
		                                        </td>
		                                    </tr>
		                                </tbody>
		                            </table>
		                        </div>
		                    </div>
		                    <!--/row-->
		                </div>
		                <div role="tabpanel" class="tab-pane" id="synopsis">
		                    <table class="table table-hover table-striped">
		                        <tbody>                                    
		                            <tr>
		                                <td>
		                                   <?php echo $movie_data['synopsis'] ?>
		                                </td>
		                            </tr>
		                        </tbody> 
		                    </table>
		                </div>
		                <div role="tabpanel" class="tab-pane demo-masked-input" id="edit">
		                    <form id="form_advanced_validation" method="POST" enctype="multipart/form-data" action="movie_details.php?id=<?php echo $_GET['id'] ?>">
                                <div class="form-group form-float">
                               		<b>Movie ID</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control px-3" value="<?php echo $movie_data['movie_id'];?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                               		<b>Title</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control px-3" name="title" placeholder="Username" value="<?php echo $movie_data['title'];?>">
                                        </div>
                                        <small class="text-danger"><?php echo $title_err ?></small>
                                    </div>
                                </div>
                                <div class="form-group form-float">
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
                                <div class="form-group form-float">
                               		<b>Duration</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control px-3" name="duration" id="duration" placeholder="Duration" value="<?php echo $movie_data['duration'];?>">
                                        </div>
                                        <small class="text-danger"><?php echo $duration_err ?></small>
                                    </div>
                                </div>
                               	<div class="form-group form-float">
                               		<b>Release Date</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control px-3" name="release_date" placeholder="Ex: 30/07/2016" value="<?php echo $movie_data['release_date'];?>">
                                        </div>
                                        <small class="text-danger"><?php echo $release_date_err ?></small>
                                    </div>
                               	</div>
                                <div class="form-group form-float">
                                	<b>Synopsis</b>
                                    <div class="form-line">
                                        <textarea name="synopsis" cols="30" rows="5" class="form-control px-3"><?php echo $movie_data['synopsis']; ?></textarea>
                                    </div>
                                    <small class="text-danger"><?php echo $synopsis_err ?></small>
                                </div>
                                <div class="form-group">
                                	<b>Movie Poster</b><br>
                                    <small>*This is only preview the image before, you must put your new image</small>
                                    <input type="file" name="movie_poster" accept="image/x-png,image/gif,image/jpeg" class="dropify form-control text-center px-3" data-default-file="../assets/images/movies_poster/<?php echo $movie_data['poster'] ?>"/>
                                    <small class="text-danger"><?php echo $movie_poster_err ?></small>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="sure_check" name="sure_check">
                                    <label for="sure_check">Are you sure want to update this movie?</label>
                                    <small class="text-danger d-block"><?php echo $sure_check_err ?></small>
                                </div>

                                <input type="hidden" name="id" value="<?php echo $movie_data['movie_id'] ?>">
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
		                </div>
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

    <!-- Mask -->
    <script src="../assets/plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>

    <script>
    	$(document).ready(function(){
            $('.dropify').dropify();
            $("#duration").mask("0h 0m");

            $("#delete_movie").on('click',function(){
                const swalWithBootstrapButtons = Swal.mixin({
                  customClass: {
                    confirmButton: 'btn btn-success mx-2',
                    cancelButton: 'btn btn-danger mx-2'
                  },
                  buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Yes, delete it!',
                  cancelButtonText: 'No, cancel!',
                  reverseButtons: true
                }).then((result) => {
                  if (result.value) {
                    swalWithBootstrapButtons.fire(
                      'Deleted!',
                      'Selected Movie has been deleted.',
                      'success'
                    )

                    $.ajax({
                        type: 'post',
                        url: '../controller/movie_delete_controller.php',
                        data: { id : $("#id_movie").val()},
                        success: function (response) {
                            if(JSON.parse(response.toLowerCase())){
                                window.location.reload(true);
                            }
                        }
                    });
                    window.location.href = "index.php";
                  } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                  ) {
                    swalWithBootstrapButtons.fire(
                      'Cancelled',
                      'Movie Removal Canceled',
                      'error'
                    )
                  }
                })
            })

    	})
    </script>

    <?php
        if(isset($_SESSION['canceled'])){
    ?>         
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script> 
                $(document).ready(function(){
                    Swal.fire({
                      icon: 'error',
                      title: 'Failed to Update Movie',
                      text : 'Please check the field again',
                      showConfirmButton: false,
                      timer: 1500
                    })
                })   
            </script>
    <?php
        unset($_SESSION['canceled']);
        }
    ?>

</html>