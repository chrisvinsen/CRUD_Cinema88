<?php
    // session_start();
	include '../model/Database.php';
	$db = new DB();

	if(isset($_SERVER["REQUEST_METHOD"]) == "POST"){
		$id = $_POST['id'];

		$data = array(
			"movie_id" => $id,
		);

		$movie_data = $db->delete("movies", $data);

	}
		
?>