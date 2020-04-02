<?php
    // session_start();
	include '../model/Database.php';
	$db = new DB();

	$user_email = $_SESSION['email'];

	date_default_timezone_set('Asia/Jakarta');

	$data = array(
		"where" => array(
			"email_employee" => $user_email,
		),
		"return_type" => "single"
	);

	$user_data = $db->getRows("employee", $data);

?>