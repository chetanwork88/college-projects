<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
	
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
		<li><a class="active" href="Signin.php" target="_top"><i class="glyphicon glyphicon-user"></i> SIGNUP</a></li>
		<li><a href="About.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i>ABOUT US</a></li>
		<li><a href="checkreport.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i> REPORTS</a></li>
		<li><a href="Projects.php" target="_top"><i class="glyphicon glyphicon-dashboard"></i>PROJECTS</a></li>
		<li><a href="checklogin.php" target="_top"><i class="glyphicon glyphicon-list-alt"></i> APPLY HERE</a></li>	
  		<li><a href="index.php" target="_top"><i class="glyphicon glyphicon-home"></i> HOME</a></li>	
 		</div>
	</ul>

	<!--*************************The content****************  -->
	<div class="showuser">
		<?php 
			session_start();
			if(isset($_SESSION['id']))
			 echo '<div class="userinfo">Welcome, '. $_SESSION["id"] . '</div>';
			else
			 echo '<div class="userinfo"><a href="index.php">You are not logged in!</a></div>';
			
		?>
	</div>	

	<div class="quote">
		<p>-"FARMING" is a PROFESSION of HOPE-</p>
	</div>		
			
			<div class="signupform">
				<div class="signupheading">
				Signup
				</div>
				<form action="Signup.php" method="post">
					<table>
						<tr>
							<td>Username:</td>
						</tr>
						<tr>
							<td><input type="text" name="semail"  class="form-control" size="50" minlength="10" maxlength="12" title="Only digits are allowed." placeholder="Enter your Aadhar/Mobile Number." required></td>
						</tr>
						<tr>
							<td>Password:</td>
						</tr>
						<tr>	
							<td><input type="password" name="spwd" size="50" class="form-control" placeholder="Enter your Password." required></td>
						</tr>
						<tr>
							<td>Confirm Password:</td>
						</tr>
						<tr>	
							<td><input type="password" name="scnfpwd" size="50" class="form-control" placeholder="Re-type your Password." required></td>
						</tr>
						<tr>
							<td>
								<input type="Submit" name="signup" value="Signup">
								<br>
								<h4>Already have an account <a href="index.php">Click Here</a>*</h4>
							</td>
							
						</tr>
					</table>
				</form>
			</div>
		
	</div>


	
	
	</div>
</body>
</html>