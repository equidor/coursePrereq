<?php
	//set JSON headers
	header('Cache-Control: no-cache, must-revalidate');
	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	header('Content-type: application/json');
	
	//fill in your api key - e.g. $key = "6b256fd1js59c9dbdcdf2954f9b947537"
	$key = y;
	$course = $_GET["q"];
	$url = "http://api.uwaterloo.ca/public/v1/?key=".$key."&service=Prerequisites&q=".rawurlencode($course);
	
	// jSON String for request
	$json_string = '';
	 
	// Initializing curl
	$ch = curl_init( $url );
	 
	// Configuring curl options
	$options = array(
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_HTTPHEADER => array('Content-type: application/json') ,
	CURLOPT_POSTFIELDS => $json_string
	);
	 
	// Setting curl options
	curl_setopt_array( $ch, $options );
	 
	// Getting results
	$result =  curl_exec($ch); // Getting jSON result string
	echo $result;
?>
	
	