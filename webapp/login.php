<?php
	$user = 'root';
	$password = 'root';
	$db = 'mydb';
	$host = 'localhost';
	$port = 8889;
	$link = mysqli_connect("$host", $user, $password, $db);
	if (!$link){ 
		die ("Could not connect: " . mysql_error());
	}
	$user = $_GET['username'];
	$pass = $_GET['password'];
	$sql = "SELECT id FROM login WHERE username='$user' AND pwd='$pass'";
	$result = mysqli_query($link, $sql);
	$test = mysqli_num_rows($result);
	if ($test == 0){
		header('Location: sign-in.html', false);
	exit;
	}
	else{
		header('Location: home.html', false);
		exit;
	}
?>
