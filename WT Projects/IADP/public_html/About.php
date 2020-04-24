<!DOCTYPE html>
<html>
<head>
	<title>About Us </title>
	
  <meta charset="utf-8">
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
		<div class="head">
		<li><a href="index.php" target="_top"><img class="bgimg" src="/resources/logo.png"></a></li>
		</div>

		<div class="head1">
		<li><a href="index.php" target="_top">IADP<sup>&#8482</sup></a></li>
		</div>
		<!--Collapsive button-->

		<div class="tabs">
		<li><a class="logoutcolor" href="logout.php" target="_top"><i class="glyphicon glyphicon-user"></i> LOGOUT</a></li>
		<li><a class="logincolor" href="Signin.php" target="_top"><i class="glyphicon glyphicon-user"></i> SIGNUP</a></li>
		<li><a class="active" href="About.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i>ABOUT US</a></li>
		<li><a href="checkreport.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i> REPORTS</a></li>
		<li><a href="Projects.php" target="_top"><i class="glyphicon glyphicon-dashboard"></i>PROJECTS</a></li>
		<li><a href="checklogin.php" target="_top"><i class="glyphicon glyphicon-list-alt"></i> APPLY HERE</a></li>	
  		<li><a href="index.php" target="_top"><i class="glyphicon glyphicon-home"></i> HOME</a></li>	
 		</div>
	</ul>

	<!--*************************The content****************  -->
	<div class="showuser">
		<?php session_start();
			if(isset($_SESSION['id']))
			 echo '<div class="userinfo">Welcome, '. $_SESSION["id"] . '</div>';
			else
			 echo '<div class="userinfo"><a href="index.php">You are not logged in!</a></div>';
			 ?>
	</div>
	<div class="glance">At a Glance</div>
	<div class="aboutdata">
		Integrated Agriculture Development Project is initiative Focused at improvement in Agriculture along with providing farmers Sustainable income sources to make them financially strong.
		This project mainly aims at collecting information from farmers, providing them income sources and other needed help considering family as unit. This project has collaborations with many Organizations working in this sector and will be further involve academics, government, society and industry in this project.
	</div>

	</div>
</body>
</html>