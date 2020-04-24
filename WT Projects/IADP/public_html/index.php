<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
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

  	<style>
		.mySlides {display:none;}
	</style>


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
		<li><a href="About.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i>ABOUT US</a></li>
		<li><a href="checkreport.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i> REPORTS</a></li>
		<li><a href="Projects.php" target="_top"><i class="glyphicon glyphicon-dashboard"></i>PROJECTS</a></li>
		<li><a href="checklogin.php" target="_top"><i class="glyphicon glyphicon-list-alt"></i> APPLY HERE</a></li>	
  		<li><a class="active" href="index.php" target="_top"><i class="glyphicon glyphicon-home"></i> HOME</a></li>	
 		</div>
	</ul>

	<!--*************************The content****************  -->

	<!-- login user name -->
	<div class="showuser">
		<?php session_start();
			if(isset($_SESSION['id']))
			 echo '<div class="userinfo">Welcome, '. $_SESSION["id"] . '</div>';
			else
			 echo '<div class="userinfo"><a href="index.php">You are not logged in!</a></div>';
			 ?>
	</div>		 

	<div class="hometop">
		<div class="bgimg">
			<div class="w3-content w3-section">
  				<img class="mySlides" src="../resources/farmer1.jpg" style="width:100%">
  				<img class="mySlides" src="../resources/farmer2.jpg" style="width:100%">
  				<img class="mySlides" src="../resources/farmer6.jpg" style="width:100%">
  		
  				<script>
					var myIndex = 0;
					carousel();

					function carousel() {
    					var i;
    					var x = document.getElementsByClassName("mySlides");
    					for (i = 0; i < x.length; i++) {
       					x[i].style.display = "none";  
    					}
    					myIndex++;
    					if (myIndex > x.length) {myIndex = 1}    
    					x[myIndex-1].style.display = "block";  
    					setTimeout(carousel, 2000); // Change image every 5 seconds
					}
				</script>
			</div>
		</div>


		<div class="loginform">
			<div class="lheading">Login</div>
			<form action="Login.php" method="post">
				<table>
					<tr>
						<td>Username:</td>
					</tr>
					<tr>
						<td><input type="text" class="form-control" name="lemail"  minlength="10" maxlength="12" title="Only 10 or 12 digits are allowed." placeholder="Enter Your Aadhar/Mobile Number." required></td>
					</tr>

					<tr>
						<td>Password:</td>
					</tr>
					<tr>
						<td><input type="password" class="form-control" name="lpwd" placeholder="Enter your password." required></td>
					</tr>

					<tr>
						<td><input type="submit" name="login" value="Log In">
							<br>
							<br>
							<span class="txt">New Here?<a href="Signin.php">Click here </a>to signup</span>
						</td>
					</tr>

				</table>
			</form>
		</div>
	</div>

	


	
	</div>
</body>
</html>
