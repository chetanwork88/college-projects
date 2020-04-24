<?php
		$servername = "5.189.157.161";
        $username = "iadpindi_admin";
        $password = "Admin@123";
        $dbname = "iadpindi_iadp";

// Create connection
if(!empty($_POST['semail']) && !empty($_POST['spwd']) && ($_POST['spwd']==$_POST['scnfpwd'])){ 
    $user=$_POST['semail']; 
    //$pass=md5($_POST['spwd']); 
    $pass=$_POST['spwd']; 
	$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO login (username,password)
	VALUES ('$user','$pass')";

	if ($conn->query($sql) === TRUE) 
	{
   			header("Location:index.php");
	}
	 else 
	 {
    echo "Error: " . $sql . "<br>" . $conn->error;
	 }

$conn->close();
}
else
{
	echo "<script> alert('Invalid Credentials...'); window.location.href='Signin.php';</script>";
}
?>