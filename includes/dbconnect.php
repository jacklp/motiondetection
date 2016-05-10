<?php
	$dbname = "root";
	$passkey= "root";
	$host = "localhost";
	try {
		$DBH = new PDO('mysql:host=localhost;dbname=motiondetection',$dbname,$passkey);
	} catch (PDOException $e) {
		echo $e->getMessage();
		exit;
	}
?>