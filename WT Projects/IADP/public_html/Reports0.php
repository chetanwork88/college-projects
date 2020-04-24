<!DOCTYPE html>
<html>
<head>
	<title>Reports0</title>
	
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
		<?php session_start();
			if(isset($_SESSION['id']))
			 echo '<div class="userinfo">Welcome, '. $_SESSION["id"] . '</div>';
			else
			 echo '<div class="userinfo"><a href="index.php">You are not logged in!</a></div>';
			 ?>
	</div>

	<div class="btnclass">
		<input type="button" id="backbtn" value="<< Back" onclick="location.href='Reports.php'" title="Report index Page">
		<input type="button" id="homebtn" value="Home" onclick="location.href='Reports.php'" title="Report Home Page">
		<input type="button" id="nextbtn" value="Next >>" onclick="location.href='Reports1.php'" title="Contact details">
	</div>

		<div class="repheading">Complete Details </div>

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

    	$sql="SELECT * FROM details";
    	
    	$result = $conn->query($sql);
		
		if ($result->num_rows > 0) 
		{
			echo "<table>
			<tr>
			<th>Sr No.</th>
			<th>Aadhar No.</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>Village</th>
			<th>Tehsil</th>
			<th>District</th>
			<th>Pincode</th>
			<th>State</th>
			<th>Age</th>
			<th>Contact No.</th>
			<th>Alternate Contact No.</th>
			<th>No.of Family Members</th>
			<th>Total Land</th>
			<th>Land Type</th>
			<th>Income (gross)</th>
			<th>Soil Testing Required?</th>
			<th>Already owned</th>
			<th>Horticulture Help Amount</th>
			<th>Diary Help Amount</th>
			<th>Poultry Help Amount</th>
			<th>Fishery Help Amount</th>
			<th>Animal Husbandry Help Amount</th>
			<th>Modern Methods Help Amount</th>
			<th>Monthly Expenses</th>
			<th>Total Income</th>
			<th>Sources</th>
			<th>Taken Loan Amount</th>
			<th>Loan Installment</th>
			<th>Needed Loan Amount</th>
			<th>Purpose of Loan</th>
			<th>1.Who is taking Education</th>
			<th>Education Type</th>
			<th>2.Who is taking Education</th>
			<th>Education Type</th>
			<th>3.Who is taking Education</th>
			<th>Education Type</th>
			<th>Already Available Scholarship Amount</th>
			<th>Needed Scholarship Amount</th>
			<th>1.Relation with Employed person</th>
			<th>2.Relation with Employed person</th>
			<th>1.Relation with Job needy</th>
			<th>Education</th>
			<th>2.Relation with Job needy</th>
			<th>Education</th>
			<th>Profssion</th>
			<th>1.Relation with Self-Employed</th>
			<th>2.Relation with Self-Employed</th>
			<th>Self-Business Name</th>
			<th>Self-Business Help </th>
			<th>Expected Investment</th>
			<th>Return Policy</th>
			<th>1.Relation with health needy</th>
			<th>2.Relation with health needy</th>
			<th>health help Type</th>
			<th>Expected Cost</th>
			<th>Other help</th>
			<th>Livelihood Status</th>
			<th>Improvements</th>
			<th>Author</th>
			<th>Date</th>
			<th>Project Completed?</th>
			</tr>";
		    while($row = $result->fetch_assoc())
		    {
     			echo "<tr>";
				echo "<td>" . $row['sr_no'] . "</td>";
				echo "<td>" . $row['aadhar_no'] . "</td>";
				echo "<td>" . $row['fname'] . "</td>";
				echo "<td>" . $row['mname'] . "</td>";
				echo "<td>" . $row['lname'] . "</td>";
				echo "<td>" . $row['address'] . "</td>";
				echo "<td>" . $row['village'] . "</td>";
				echo "<td>" . $row['taluka'] . "</td>";
				echo "<td>" . $row['district'] . "</td>";
				echo "<td>" . $row['pincode'] . "</td>";
				echo "<td>" . $row['state'] . "</td>";
				echo "<td>" . $row['age'] . "</td>";
				echo "<td>" . $row['contact1'] . "</td>";
				echo "<td>" . $row['contact2'] . "</td>";
				echo "<td>" . $row['family_mem'] . "</td>";
				echo "<td>" . $row['land'] . "</td>";
				echo "<td>" . $row['land_type'] . "</td>";
				echo "<td>" . $row['gross_income'] . "</td>";
				echo "<td>" . $row['soil_tested'] . "</td>";
				echo "<td>" . $row['already_owned'] . "</td>";
				echo "<td>" . $row['horti_amt'] . "</td>";
				echo "<td>" . $row['dairy_amt'] . "</td>";
				echo "<td>" . $row['poultry_amt'] . "</td>";
				echo "<td>" . $row['fishery_amt'] . "</td>";
				echo "<td>" . $row['ah_amt'] . "</td>";
				echo "<td>" . $row['mm_amt'] . "</td>";
				echo "<td>" . $row['month_expenses'] . "</td>";
				echo "<td>" . $row['total_income'] . "</td>";
				echo "<td>" . $row['sources'] . "</td>";
				echo "<td>" . $row['loan_amt'] . "</td>";
				echo "<td>" . $row['loan_installment'] . "</td>";
				echo "<td>" . $row['amt_need'] . "</td>";
				echo "<td>" . $row['loan_purpose'] . "</td>";
				echo "<td>" . $row['taking_edu1'] . "</td>";
				echo "<td>" . $row['edu_type1'] . "</td>";
				echo "<td>" . $row['taking_edu2'] . "</td>";
				echo "<td>" . $row['edu_type2'] . "</td>";
				echo "<td>" . $row['taking_edu3'] . "</td>";
				echo "<td>" . $row['edu_type3'] . "</td>";
				echo "<td>" . $row['get_schship_amt'] . "</td>";
				echo "<td>" . $row['need_schship_amt'] . "</td>";
				echo "<td>" . $row['employed1'] . "</td>";
				echo "<td>" . $row['employed2'] . "</td>";
				echo "<td>" . $row['need_job1'] . "</td>";
				echo "<td>" . $row['job_needy_edu1'] . "</td>";
				echo "<td>" . $row['need_job2'] . "</td>";
				echo "<td>" . $row['job_needy_edu2'] . "</td>";
				echo "<td>" . $row['profession'] . "</td>";
				echo "<td>" . $row['who_selfemp1'] . "</td>";
				echo "<td>" . $row['who_selfemp2'] . "</td>";
				echo "<td>" . $row['which_selfb'] . "</td>";
				echo "<td>" . $row['selfb_help_type'] . "</td>";
				echo "<td>" . $row['selfb_invest'] . "</td>";
				echo "<td>" . $row['return_policy'] . "</td>";
				echo "<td>" . $row['health_help1'] . "</td>";
				echo "<td>" . $row['health_help2'] . "</td>";
				echo "<td>" . $row['health_help_type'] . "</td>";
				echo "<td>" . $row['health_help_cost'] . "</td>";
				echo "<td>" . $row['other_help'] . "</td>";
				echo "<td>" . $row['liveli_status'] . "</td>";
				echo "<td>" . $row['improvements'] . "</td>";
				echo "<td>" . $row['author'] . "</td>";
				echo "<td>" . $row['date'] . "</td>";
				echo "<td>" . $row['complete'] . "</td>";

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

 