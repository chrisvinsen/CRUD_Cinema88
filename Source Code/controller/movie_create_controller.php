<?php
    session_start();
	include '../model/Database.php';
	$db = new DB();

	date_default_timezone_set('Asia/Jakarta');

	$title = $genre = $release_date = $duration = $synopsis = $movie_poster = '';
	$title_err = $genre_err = $release_date_err = $duration_err = $synopsis_err = $movie_poster_err = '';

	if($_SERVER["REQUEST_METHOD"] == "POST"){

        $input_title = trim(stripslashes(htmlentities(strip_tags(htmlspecialchars($_POST['title'])))));
		if(empty($input_title)){
            $title_err = "Movies Title must be filled.";
        }else{
            $title = $input_title;
        }

        if(empty($_POST['genre'])){
        	$genre_err = "Please Choose the Movies Genre.";
        }else{
        	$genre = implode(", ", $_POST['genre']);
        }

        $input_release_date = trim(stripslashes(htmlentities(strip_tags(htmlspecialchars($_POST['release_date'])))));
		if(empty($input_release_date)){
            $release_date_err = "Movies Release Date must be filled.";
        }else if($input_release_date < date("Y-m-d")){
        	$release_date_err = "Movie Release Date cannot smaller than current date.";
        }else{
            $release_date = $input_release_date;
        }

        $input_duration = trim(stripslashes(htmlentities(strip_tags(htmlspecialchars($_POST['duration'])))));
		if(empty($input_duration)){
            $duration_err = "Movies Duration must be filled.";
        }else{
            $duration = $input_duration;
        }

        $input_synopsis = trim(stripslashes(htmlentities(strip_tags(htmlspecialchars($_POST['synopsis'])))));
		if(empty($input_synopsis)){
            $synopsis_err = "Movies Synopsis must be filled.";
        }else{
            $synopsis = $input_synopsis;
        }

        $input_movie_poster = trim(stripslashes(htmlentities(strip_tags(htmlspecialchars($_FILES['movie_poster']['name'])))));
        if(empty($input_movie_poster)){
        	$movie_poster_err = "Movies Poster must be filled.";
        }else{
        	$movie_poster = $input_movie_poster;
        }

		//Get image name
		if(empty($title_err) && empty($genre_err) && empty($release_date_err) && empty($duration_err) && empty($synopsis_err) && empty($movie_poster_err)){

			//Image file directory
			$target = "../assets/images/movies_poster/".basename($movie_poster);

			$moviesData = array(
	            "poster" => $movie_poster,
	            "title" => $title,
	            "synopsis" => $synopsis,
	            "duration" => $duration,
	            "genre" => $genre,
	            "release_date" => $release_date
	            // date("Y-m-d H:i:s")
	        );

	        $insert = $db->insert("movies", $moviesData);

	        if(!empty($movie_poster)){
	        	if (!move_uploaded_file($_FILES['movie_poster']['tmp_name'], $target)) {
			  		$messages = "Failed to upload image";
			  	}
	        }
            $_SESSION['created'] = true;
	        header("Location: ../view/index.php");
		}
	}

?>