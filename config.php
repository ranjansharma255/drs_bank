<?php

	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'drsbank';

	$conn = mysqli_connect($servername, $username, $password, $database) or die("Connection With the database is Unsuccessful".mysqli_connect_error());

?>