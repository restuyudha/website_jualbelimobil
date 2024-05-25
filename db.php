<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbdname  = 'db_bukatoko';

	$conn = mysqli_connect($hostname, $username, $password, $dbdname) or die ('Gagal terhubung ke database');
?> 