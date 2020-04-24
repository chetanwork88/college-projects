<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
if(!empty($_POST['semail']) && !empty($_POST['spwd']) && ($_POST['spwd']==$_POST['scnfpwd'])){ 
    $user=$_POST['semail']; 
    $pass=$_POST['spwd']; 

	$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO login (email,password)
	VALUES ('$user','$pass')";

	if ($conn->query($sql) === TRUE) 
	{
   			header("Location:index.html");
	}
	 else 
	 {
    echo "Error: " . $sql . "<br>" . $conn->error;
	 }

$conn->close();
}
else
{
	echo "<script> alert('Invalid Credentials...'); window.location.href='Signin.html';</script>";
}
?>