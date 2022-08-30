<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if(empty($username)) header("location:./pages/login.php");
else header("location:./pages/dashboard.php");