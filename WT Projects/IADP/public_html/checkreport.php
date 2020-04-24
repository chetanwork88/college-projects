<?php 
session_start();
        $servername = "5.189.157.161";
        $username = "iadpindi_admin";
        $password = "Admin@123";
        $dbname = "iadpindi_iadp";

        $user=$_SESSION['id'];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
    	if ($conn->connect_error) 
    	{
    		die("Connection failed: " . $conn->connect_error);
    	}

    	$sql="SELECT type FROM login WHERE username='$user'";
    	
    	$result = $conn->query($sql);
        $row = $result->fetch_assoc();


if(isset($_SESSION['id']) && $row['type']=='admin' )
{
    	header("location: Reports.php");

}
else
{
         header("location: ReportPopup.php");
}
?>