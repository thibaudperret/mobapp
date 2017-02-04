<head>
	<title>login.php</title>
</head>

<body>
	
<?php
	$con = mysql_connect ("localhost", "root", "");
	mysql_select_db ("mydb", $con);
	
	if (!$con){ 
		die ("Could not connect: " . mysql_error());
    }
    
    $sql = "SELECT id FROM login WHERE username='%".$username."%' AND pwd='%".$password."%'";
    
    mysql_close($con);
    
    if (mysql_num_rows($sql) == 0){
		header('Location: sign-in.html');
		exit;
	}
	else{
		header('Location: home.html');
		exit;
	}
?>
</body>

</html>
