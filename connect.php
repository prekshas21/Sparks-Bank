<?php
  $server = "localhost";
  $username = "root";
  $password = "";
	$conn = mysqli_connect("localhost","root","");

	if(!$conn){
		die("Could not connect to the database due to the following error");
	}
	else {
		echo "Online Banking";
	}
?>