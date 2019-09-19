<!--
Author : Aguzrybudy
Created : Jum'at, 14-April-2017
Title : Login dengan Bcrypt
-->

<?php
include "Bcrypt.php";
include "config/conlog.php";
$username = $_POST['username'];
$password = $_POST['password'];

function resolve_login($username, $password) 
{
	include "config/conlog.php";
	$bcrypt = new Bcrypt(16);
	$data = $mysqli->query("SELECT password FROM user WHERE username='$username' or email='$username'  ");
	$result=mysqli_fetch_array($data);
	$hash =$result['password'];
	return $bcrypt->verify($password, $hash);
}

if(resolve_login($username, $password)!=false):
	$login = $mysqli->query("SELECT * FROM user WHERE username='$username' or email='$username' ");
	$find=mysqli_num_rows($login);
	$result=mysqli_fetch_array($login);
	if ($find > 0):
	  session_start();
		$_SESSION['username'];
		$_SESSION['id']   		 = $result['id'];
		$_SESSION['kode_user']   = $result['kode_user'];	
		$_SESSION['kode']   	 = $result['kode'];			
		$_SESSION['username']	 = $result['username'];
		$_SESSION['nama']	 	 = $result['nama'];
		$_SESSION['jabatan']	 = $result['jabatan'];
		$_SESSION['level']		 = $result['level'];
		$_SESSION['login']	 	 = 1;
	  
	  //header("Location: ".$_SESSION['level']."/home");
	  header("Location: home");
	endif;
else:
	  echo "<script>alert('Username dan Password tidak Cocok'); window.location = 'index'</script>";
endif;

?>