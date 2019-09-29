<?php
	include "connection.php";
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$query = "insert into user values('$email','$pass');";
	mysqli_query($db, $query) or die("Error querying database.");		
	echo "<script> window.location='http://localhost/musicplayer/login.php'; </script>";
    exit;
	//ob_start();
	//header("Location: C:\wamp64\www\ trial1\login.php");
	//die();
	mysqli_close($db);
?>