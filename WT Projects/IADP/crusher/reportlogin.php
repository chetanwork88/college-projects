<?php
if(isset($_POST["submit"]))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crusher";

      $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $username=$_POST['uname'];
        $password=md5($_POST['pwd']);

        $result = mysqli_query($conn,"SELECT * FROM login WHERE username='$username' AND password='$password'");


       $count=mysqli_num_rows($result);
       if ($count == 1) 
       {
          header("Location:report.php");
       }
       else
       {
        echo "<script> alert('Invalid Credentials...'); window.location.href='reportlogin.php';</script>";
       }



 $conn->close();       
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Crusher</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- font-awesome-icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Bootstrap icons -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<!-- Google Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <link rel="stylesheet" type="text/css" href="css/home.css">



</head>
<body>
   
   <div class="container-fluid">

<!--Navbar-->
	<ul>

		<div class="head1">
		<li><a href="index.php" target="_top">Crusher<sup>&#8482</sup></a></li>
		</div>
		<!--Collapsive button-->

		<div class="tabs">
		<li><a class="logoutcolor" href="#" target="_top"><i class="glyphicon glyphicon-user"></i> LOGOUT</a></li>
		<li><a class="logincolor" href="#" target="_top"><i class="glyphicon glyphicon-user"></i> SIGNUP</a></li>
		<li><a class="active" href="reportlogin.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i> REPORTS</a></li>	
  		<li><a href="index.php" target="_top"><i class="glyphicon glyphicon-home"></i> FILL THE FORM</a></li>	
 		</div>
	</ul>
   </div>

   

   <div  class="container-fluid" id="loginform">
  <div class="lheading">Login</div>
    <table>
      <form action="" method="POST">
    
            <tr>
          <td>
            Username
          </td>
          <td>
            :
          </td>
          <td>
            <input type="text" name="uname" placeholder="Enter admin username " required><span class="star">*</span>
          </td>
        </tr> 

        <tr>
          <td>
            Password
          </td>
          <td>
            :
          </td>
          <td>
            <input type="password" name="pwd" placeholder="Enter admin password " required><span class="star">*</span>
          </td>
        </tr>

        
        <tr>
          <td>
            
          </td>
          <td>
            
          </td>
          <td class="submitdata">
            <input type="submit" name="submit" value="Submit">
          </td>
        </tr>


      </form>

    </table>

   </div>

</body>
</html>
