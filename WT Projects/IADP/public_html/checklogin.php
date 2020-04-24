<?php 
session_start();
if(!isset($_SESSION['id']) || empty($_SESSION['id']))
{
	header("location: LoginPopup.php");
}
else
{
header("location: Apply.php");
}
?>