<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
    
    
    <!--##################### navbar################################-->
    
  <nav class="navbar navbar-expand-sm ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar" id="collapsebtn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  href="#"><img src="/resources/logo.png" alt="Logo"></a>
            <a class="navbar-brand" href="#">IADP<sup>&#8482;</sup></a>
        </div>
        
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li><a href="index.php" target="_top"><i class="glyphicon glyphicon-home"></i> HOME</a></li>
                <li><a href="apply.php" target="_top"><i class="glyphicon glyphicon-list-alt"></i> APPLY HERE</a></li>
                <li><a href="projects.php" target="_top"><i class="glyphicon glyphicon-dashboard"></i>PROJECTS</a></li>
                <li><a href="checkreport.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i> REPORTS</a></li>
                <li><a class="active" href="about.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i>ABOUT US</a></li>
                <li><a class="logincolor" href="#" target="_top"><i class="glyphicon glyphicon-user"></i> SIGNUP</a></li>
                <li><a class="logoutcolor" href="logout.php" target="_top"><i class="glyphicon glyphicon-user"></i> LOGOUT</a></li>
            </ul>
        </div>
  </nav>
  
  <div class="showuser">
		<?php session_start();
			if(isset($_SESSION['id']))
			{
			    $servername = "5.189.157.161";
                $username = "iadpindi_admin";
                $password = "Admin@123";
                $dbname = "iadpindi_iadp";

                $conn = new mysqli($servername, $username, $password, $dbname);
                
                $user=$_SESSION['id'];
                $sql = "SELECT fname,lname FROM login WHERE username='$user'";
                $result =$conn->query($sql);
                while($row = $result->fetch_assoc())
		        {
		           $fname=$row['fname'];
		           $lname=$row['lname'];
		        }
			 echo '<div class="userinfo">'. $fname .' '.$lname. '</div>';
			}
			else
			{
			 echo '<div class="userinfo"><a href="index.php">You are not logged in!</a></div>';
			}
			 ?>
	</div>
	
	<!---------------------------------content---------------------->
	
	<div class="jumbotron">
       <div class="container">
           <h1>At a Glance</h1>      
           <p>Integrated Agriculture Development Project is initiative Focused at improvement in Agriculture along with providing farmers Sustainable income sources to make them financially strong.
		This project mainly aims at collecting information from farmers, providing them income sources and other needed help considering family as unit. This project has collaborations with many Organizations working in this sector and will be further involve academics, government, society and industry in this project.</p>
       </div>
    </div>
	
    
</body>
</html>