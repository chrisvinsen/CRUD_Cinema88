<?php
	
    session_start();
	include '../model/Database.php';
	$db = new DB();

	date_default_timezone_set('Asia/Jakarta');

	$messages = '';

	$data = array(
		"order_by" => "release_date ASC"
	);
	$movies_data = $db->getRows("movies", $data);

	function date_formatting($datetime){
		return date_format(new DateTime($datetime), "D, jS F Y");
	}

    function time_elapsed_string($datetime, $full = false) {
	    $now = new DateTime;
	    $ago = new DateTime($datetime);
	    $diff = $now->diff($ago);

	    $diff->w = floor($diff->d / 7);
	    $diff->d -= $diff->w * 7;

	    $string = array(
	        'y' => 'year',
	        'm' => 'month',
	        'w' => 'week',
	        'd' => 'day',
	        'h' => 'hour',
	        'i' => 'minute',
	        's' => 'second',
	    );
	    foreach ($string as $k => &$v) {
	        if ($diff->$k) {
	            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
	        } else {
	            unset($string[$k]);
	        }
	    }

	    if (!$full) $string = array_slice($string, 0, 1);
	    if($datetime < date("Y-m-d H:i:s")){
	    	return $string ? implode(', ', $string) . ' ago' : 'just now';
	    }else{
	    	return $string ? implode(', ', $string) . ' more' : 'just now';
	    }
	}

?>