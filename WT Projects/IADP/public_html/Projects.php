<!DOCTYPE html>
<html>
<head>
	<title>projects</title>
	
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
		<li><a href="About.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i>ABOUT US</a></li>
		<li><a href="checkreport.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i> REPORTS</a></li>
		<li><a class="active" href="Projects.php" target="_top"><i class="glyphicon glyphicon-dashboard"></i>PROJECTS</a></li>
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

	<div class="projects">
		<div class="prhead">Statical Analysis</div>


		<table>
			<tr><th></th>
				<th><a>Total Projects</a></th>
				<th><a>Completed Projects</a></th>
				<th><a>Remaining projects</a></th>
			</tr>
			<tr>
				<th>Agriculture</th>
				<td>
					<?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE
                     horti_help='Yes'
                     OR dairy_help='Yes'
                     OR poultry_help='Yes'
                     OR fishery_help='Yes'
                     OR ah_help='Yes'
                     OR mm LIKE '%[a-zA-Z]%' 
                     ";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>
				      	
				</td>
				<td>
					
                    <?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE 
                     complete='Yes'
                     /*AND horti_help='Yes'
                     OR dairy_help='Yes'
                     OR poultry_help='Yes'
                     OR fishery_help='Yes'
                     OR ah_help='Yes'
                     OR mm LIKE '%[a-zA-Z]%'*/
                      ";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>

				</td>
				<td>
					
                     <?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE 
                     horti_help='Yes'
                     OR dairy_help='Yes'
                     OR poultry_help='Yes'
                     OR fishery_help='Yes'
                     OR ah_help='Yes'
                     OR mm LIKE '%[a-zA-Z]%'
                     AND complete='No' ";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>

				</td>
			</tr>
			<tr>
				<th>Education</th>
				<td>
					<?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE taking_edu1 IS NOT NULL";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>
				      	
				</td>
				<td>
					
                    <?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE taking_edu1 IS NOT NULL AND complete='Yes'";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>

				</td>
				<td>
					
                     <?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE taking_edu1 IS NOT NULL AND complete='No'";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>

				</td>
			</tr>
			<tr>
				<th>Employment</th>
				<td>
					<?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE need_job1 IS NOT NULL";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>
				      	
				</td>
				<td>
					
                    <?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE need_job1 IS NOT NULL AND complete='Yes' ";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>

				</td>
				<td>
					
                     <?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE need_job1 IS NOT NULL AND complete='No' ";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>

				</td>
			</tr>
			<tr>
				<th>Self-Employment</th>
				<td>
					<?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE need_selfb='Yes'";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>
				      	
				</td>
				<td>
					
                    <?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE need_selfb='Yes' AND complete='Yes' ";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>

				</td>
				<td>
					
                     <?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE need_selfb='Yes' AND complete='No' ";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>

				</td>
			</tr>
			<tr>
				<th>Health</th>
				<td>
					<?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE health_help1 IS NOT NULL";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>
				      	
				</td>
				<td>
					
                    <?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE health_help1 IS NOT NULL AND complete='Yes' ";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>

				</td>
				<td>
					
                     <?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE health_help1 IS NOT NULL AND complete='No' ";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>

				</td>
			</tr>
			<tr class="prototal">
				<th>Total</th>
				<td>
					<?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>
				      	
				</td>
				<td>
					
                    <?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE complete='Yes' ";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>

				</td>
				<td>
					
                     <?php
					$conn = new mysqli("5.189.157.161", "iadpindi_admin","Admin@123","iadpindi_iadp");
                     $sql="SELECT * FROM details WHERE complete='No' ";
                     $result=mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($result);
                      echo "$rowcount";
				      ?>

				</td>
			</tr>
		</table>

	</div>
	
	</div>
</body>
</html>