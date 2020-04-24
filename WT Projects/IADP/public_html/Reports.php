<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
	
  <meta charset="utf-8">
  <meta name="viewport" content="`width=device-width, initial-scale=1">

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
		<li><a href="About.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i>ABOUT US</a></li>
		<li><a class="active" href="Reports.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i> REPORTS</a></li>
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
	
	<div class="repheading">
		
		Click on the following options to generate report 
	</div>
	<div class="completereportbutton">
		<input type="button" class="combtn" value="Completed Projects" onclick="location.href='comprojects.php'">
		<input type="button" class="incombtn" value="Incomplete Projects" onclick="location.href='incomprojects.php'">
		
	</div>
	<div class="replist">

		<table>
			<tr>
				<th>Sr No.</th>
				<th>Agriculture</th>
				<th>Education</th>
				<th>Employment</th>
				<th>Health</th>
			</tr>
			<tr>
				<td>1</td>
				<td><a href="Reports1.php">Contact Details</a></td>
				<td><a href="Reports11.php">Scholarship Requirements </a></td></td>
				<td><a href="Reports21.php">Job Requirements</a></td></td>
				<td><a href="Reports31.php">HealthCare Requirements</a></td></td>
			</tr>
			<tr>
				<td>2</td>
				<td><a href="Reports2.php">Village wise Details</a></td>
				<td><a href="Reports12.php">Higher Education Help</a></td></td>
				<td><a href="Reports22.php">Self-Employment investment</a></td>
				<td></td>
			</tr>

			<tr>
				<td>3</td>
				<td><a href="Reports3.php">Soil Testing Requirements</a></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>4</td>
				<td><a href="Reports4.php">Horticulture (Fruit Farms) Requirements</a></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>5</td>
				<td><a href="Reports5.php">Dairy Requirements</a></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>6</td>
				<td><a href="Reports6.php">Poultry Requirements</a></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>7</td>
				<td><a href="Reports7.php">Fishery Requirements</a></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>8</td>
				<td><a href="Reports8.php">Animal Husbandry Requirements</a></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>9</td>
				<td><a href="Reports9.php">Modern Methods Requirements</a></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		
	</div>


   <div class="completereportbutton">
		<input type="button" value="Click Here To See Complete Details" onclick="location.href='Reports0.php'">
	</div>




	</div>
</body>
</html>