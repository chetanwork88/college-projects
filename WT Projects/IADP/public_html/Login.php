<?php 
session_start();

$servername = "5.189.157.161";
$username = "iadpindi_admin";
$password = "Admin@123";
$dbname = "iadpindi_iadp";

// Create connection
if(!empty($_POST['lemail']) && !empty($_POST['lpwd'])) { 
    $user=$_POST['lemail']; 
    //$pass=md5($_POST['lpwd']); 
     $pass=$_POST['lpwd'];
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

    $result = mysqli_query($conn,"SELECT * FROM login WHERE username='$user' AND password='$pass'");


$count=mysqli_num_rows($result);
    if ($count == 1) 
    {
    	$_SESSION["id"]=$user;
        header("Location:index.php");
    

    }else{
        echo "<script> alert('Invalid Credentials...'); window.location.href='index.php';</script>";
}

}


   



?>