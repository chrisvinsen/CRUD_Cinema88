<?php
    session_start();
	include '../model/Database.php';
	$db = new DB();

	if(isset($_SERVER["REQUEST_METHOD"]) == "GET"){
		$id = $_GET['id'];

		$data = array(
			"where" => array(
				"movie_id" => $id,
			),
			"return_type" => "single"
		);

		$movie_data = $db->getRows("movies", $data);

		$genres = explode(", ", $movie_data['genre']);
	}
		
?>