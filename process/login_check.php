<?php 
session_start();

$username = "Rifki";
$password = "Rifki123";

if(isset($_POST["submit"])){
	if($_POST["username"] == $username && $_POST["password"] == $password){
		$_SESSION["username"] = $username;
		echo "<script>alert('Anda Berhasil Login'); window.location.href='../pages/dashboard.php'</script>";
	}
	else echo"<script>alert('Anda Gagal Login'); window.location.href='../index.php';</script>";
}
