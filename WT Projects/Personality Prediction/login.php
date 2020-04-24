<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
if(!empty($_POST['lemail']) && !empty($_POST['lpwd'])) { 
    $user=$_POST['lemail']; 
    $pass=$_POST['lpwd']; 

    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

    $result = mysqli_query($conn,"SELECT * FROM login WHERE email='$user' AND password='$pass'");


$count=mysqli_num_rows($result);
    if ($count == 1) 
    {
        header("Location:TestArea.html");
    

    }else{
        echo "<script> alert('Invalid Credentials...'); window.location.href='index.html';</script>";
}

}


   



?>