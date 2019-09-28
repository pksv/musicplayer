<?php
	include 'connection.php';
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$query = "insert into user values('$email','$pass');";
	mysqli_query($db, $query) or die('Error querying database.');		
	header("Location: C:\wamp64\www\musicplayer\login.php");
	mysqli_close($db);
?>