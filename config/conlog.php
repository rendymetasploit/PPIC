<?php
	date_default_timezone_set('Asia/Jakarta');
	$host="localhost";
	$user="root";
	$pass="";
	$database="dragon";
	$mysqli=new mysqli($host,$user,$pass,$database);
	if (mysqli_connect_errno()) {
	  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); 
	}
?>