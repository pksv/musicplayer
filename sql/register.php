<?php
	include 'connection.php';
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$query = "insert into user values('$email','$pass');";
	mysqli_query($db, $query) or die('Error querying database.');		
	header( 'location: C:\wamp64\www\musicplayer\index.php');
	mysqli_close($db);
?>