<!DOCTYPE html>
<html>
<head>
	<title>Reports9</title>
	
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

		
	<div class="btnclass">
		<input type="button" id="backbtn" value="<< Back" onclick="location.href='Reports8.php'" title="Animal Husbandry details">
		<input type="button" id="homebtn" value="Home" onclick="location.href='Reports.php'" title="Report Home Page">
		<input type="button" id="nextbtn" value="Next >>" onclick="location.href='Reports11.php'" title="Scholarship details">
	</div>


	<div class="repheading">9.Modern Methods Requirements Details</div>
		<hr/>

	<div class="table-responsive">	
		<?php 
				$servername = "5.189.157.161";
        $username = "iadpindi_admin";
        $password = "Admin@123";
        $dbname = "iadpindi_iadp";

		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
    	if ($conn->connect_error) 
    	{
    		die("Connection failed: " . $conn->connect_error);
    	}

    	$sql="SELECT sr_no,aadhar_no,fname,mname,lname,contact1,address,village,taluka,district,mm,mm_amt FROM details WHERE mm LIKE '%i%'";
    	
    	
    		$result = $conn->query($sql)or die($conn->error);
		
		if ($result->num_rows > 0) 
		{
			echo "<table>
			<tr>
			<th>Sr No.</th>
			<th>Aadhar No.</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Contact No.</th>
			<th>Address</th>
			<th>Village</th>
			<th>Tehsil</th>
			<th>District</th>
			<th>Methods</th>
			<th>Amount Required</th>
			</tr>";
		    while($row = $result->fetch_assoc())
		    {
     			echo "<tr>";
				echo "<td>" . $row['sr_no'] . "</td>";
				echo "<td>" . $row['aadhar_no'] . "</td>";
				echo "<td>" . $row['fname'] . "</td>";
				echo "<td>" . $row['mname'] . "</td>";
				echo "<td>" . $row['lname'] . "</td>";
				echo "<td>" . $row['contact1'] . "</td>";
				echo "<td>" . $row['address'] . "</td>";
				echo "<td>" . $row['village'] . "</td>";
				echo "<td>" . $row['taluka'] . "</td>";
				echo "<td>" . $row['district'] . "</td>";
				echo "<td>" . $row['mm'] . "</td>";
				echo "<td>" . $row['mm_amt'] . "</td>";
				echo "</tr>";
    		}
    		echo "</table>";
		} 
		else 
		{
    		echo "<h3>No records Found..</h3>";
		}
			$conn->close();
		?>	
		
	

	</div>






	</div>
</body>
</html>



<!-- $yourArray = array();
    	$index = 0;
    	$result = $conn->query($sql);
		
			echo "<table>
			<tr>
			<th>Sr No.</th>
			<th>Aadhar No.</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Contact No.</th>
			<th>Address</th>
			<th>Village</th>
			<th>Tehsil</th>
			<th>District</th>
			<th>Amount Required</th>
			</tr>";
		    while($row=mysqli_fetch_assoc($result))
		    {
		    	$yourArray[$index] = $row;
     			echo "<tr>";
				echo "<td>" . $row[$index]['sr_no'] . "</td>";
				echo "<td>" . $row[$index]['aadhar_no'] . "</td>";
				echo "<td>" . $row[$index]['fname'] . "</td>";
				echo "<td>" . $row[$index]['mname'] . "</td>";
				echo "<td>" . $row[$index]['lname'] . "</td>";
				echo "<td>" . $row[$index]['contact1'] . "</td>";
				echo "<td>" . $row[$index]['address'] . "</td>";
				echo "<td>" . $row[$index]['village'] . "</td>";
				echo "<td>" . $row[$index]['taluka'] . "</td>";
				echo "<td>" . $row[$index]['district'] . "</td>";
				echo "<td>" . $row[$index]['mm_amt'] . "</td>";
				echo "</tr>";
				$index++;
    		} -->