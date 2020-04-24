<!DOCTYPE html>
<html>
<head>
	<title>Apply</title>
	
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
		<li><a href="Projects.php" target="_top"><i class="glyphicon glyphicon-dashboard"></i>PROJECTS</a></li>
		<li><a class="active" href="checklogin.php" target="_top"><i class="glyphicon glyphicon-list-alt"></i> APPLY HERE</a></li>	
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


	<div class="note">
		<h3>**Fields are mandatory**</h3>
	</div>
	<div class="applyform">
		<form action="Applyhereform.php" method="post">
			<fieldset>
				<legend>*Personal Details:</legend>
				<table>
					<tr>
						<td>Aadhar Number:</td>
						<td><input type="text" name="aadhar" minlength="12" maxlength="12" pattern="\d{12}" title="Only 12 digits are allowed." required><span class="star">*</span></td>
					</tr>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="fname" pattern="[A-Za-z]+" minlength="3" title="Only Alphabets are allowed." required><span class="star">*</span></td>
						<td>Middle Name:</td>
						<td><input type="text" pattern="[A-Za-z]+" minlength="3" title="Only Alphabets are allowed." name="mname"></td>
						<td>Last Name:</td>
						<td><input type="text" pattern="[A-Za-z]+" minlength="3" title="Only Alphabets are allowed." name="lname" required><span class="star">*</span></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><textarea name="address" rows="3" cols="35" required></textarea><span class="star">*</span></td>
						<td>Village/City:</td>
						<td><input type="text" name="village" pattern="[A-Za-z]+" minlength="2" title="Enter valid name." required><span class="star">*</span></td>
						<td>Tehsil/Taluka:</td>
						<td><input type="text" name="taluka" pattern="[A-Za-z]+" minlength="2" title="Enter valid name." required><span class="star">*</span></td>
						
					</tr>
					<tr>
						<td>District:</td>
						<td><input type="text" name="district" pattern="[A-Za-z]+" minlength="2" title="Enter valid name." required><span class="star">*</span></td>
						<td>Pin-Code:</td>
						<td><input type="text" name="pincode" minlength="6" maxlength="6" pattern="\d{6}" title="Only 6 digits are allowed." required><span class="star">*</span></td>
						<td>State:</td>
						<td><input type="text" name="state" pattern="[A-Za-z]+" minlength="2" title="Enter valid name." required><span class="star">*</span></td>
					</tr>
					<tr>
						<td>Age:</td>
						<td><input type="text" name="age" minlength="1" maxlength="3" pattern="[0-9]+" title="Only digits are allowed." required><span class="star">*</span></td>
					</tr>
					<tr>
						<td>Contact Number:</td>
						<td><input type="text" name="pnum1" minlength ="10" maxlength ="10" pattern="\d{10}"  title="Only 10 digits are allowed." required><span class="star">*</span></td>
						<td>Alternate Contact Number:</td>
						<td><input type="text" name="pnum2"></td>
					</tr>
					<tr>
						<td>No. of family members:</td>
						<td><input type="text" name="famnum" minlength="1" maxlength="2" pattern="[0-9]+" title="Enter valid number." required><span class="star">*</span></td>
					</tr>	
				</table>	
			</fieldset>
			<br>
			<fieldset>
				<legend>*Agriculture Details:</legend>
				<table>
					<tr>
						<td>Land (in acres):</td>
						<td><input type="text" name="land" pattern="[0-9]+.*[0-9]+" title="Only digits are allowed" required><span class="star">*</span></td>
					</tr>
					<tr>
						<td>Type:</td>
						<td>
							<select name="land_type" required>
								<option disabled selected value=""> -- Select an Option -- </option>
								<option value="8">8 months</option>
								<option value="12">12 months</option>
							</select>
							<span class="star">*</span>
					</td>
					</tr>
					<tr>
						<td>Income (gross):</td>
						<td><input type="number" name="grossincome" required><span class="star">*</span></td>
		
					</tr>
					<tr>
						<td>Soil Testing Required?:</td>
						<td>
							<select name="soil_tested" required>
								<option disabled selected value=""> -- Select an Option -- </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="star">*</span>
						</td>
					</tr>

					<tr>
						<td>Which of these do you already have?:</td>
						<td>
								<input type="checkbox" name="alown[]" value="horticulture">Horticulture<br>
								<input type="checkbox" name="alown[]" value="dairy">Dairy<br>
								<input type="checkbox" name="alown[]" value="poultry">Poultry<br>
								<input type="checkbox" name="alown[]" value="fishery">Fishery<br>
								<input type="checkbox" name="alown[]" value="animals">Animal Husbandary<br>
								<input type="checkbox" name="alown[]" value="polyhouse">Polyhouse<br>
  								<input type="checkbox" name="alown[]" value="shed">Shed<br>
  								<input type="checkbox" name="alown[]" value="mulching">Mulching<br>
  								<input type="checkbox" name="alown[]" value="machinary">Machinary<br>
						</td>
						
					</tr>

					<tr>
						<td>Need of Horticulture Help:</td>
						<td>
							<select name="horti_help" required>
								<option disabled selected value=""> -- Select an Option -- </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="star">*</span>
						</td>
						<td>If Yes,Amount:</td>
						<td><input type="number" name="hortiamt"></td>
				
					</tr>
					<tr>
						<td>Need of Diary Help:</td>
						<td>
							<select name="diary_help" required>
								<option disabled selected value=""> -- Select an Option -- </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="star">*</span>
						</td>
						<td>If Yes,Amount:</td>
						<td><input type="number" name="diaryamt" ></td>
					</tr>
					<tr>
						<td>Need of Poultry Help:</td>
						<td><select name="poultry_help" required>
							<option disabled selected value=""> -- Select an Option -- </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="star">*</span>
						</td>
						<td>If Yes,Amount:</td>
						<td><input type="number" name="poultryamt" ></td>
					</tr>
					<tr>
						<td>Need of Fishery Help:</td>
						<td><select name="fishery_help" required>
							<option disabled selected value=""> -- Select an Option -- </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="star">*</span>
						</td>
						<td>If Yes,Amount:</td>
						<td><input type="number" name="fisheryamt" ></td>
					</tr>
					<tr>
						<td>Need of Animal Husbandry Help:</td>
						<td><select name="ah_help" required>
							<option disabled selected value=""> -- Select an Option -- </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="star">*</span>
						</td>
						<td>If Yes,Amount:</td>
						<td><input type="number" name="ahamt" ></td>
					</tr>
					<tr>
						<td>Need of Modern Methods:</td>
						<td><input type="checkbox" name="modmet[]" value="polyhouse">Polyhouse<br>
  							<input type="checkbox" name="modmet[]" value="shed">Shed<br>
  							<input type="checkbox" name="modmet[]" value="mulching">Mulching<br>
  							<input type="checkbox" name="modmet[]" value="machinary">Machinary<br>
						</td>
						<td>If Yes,Amount for methods:</td>
						<td><input type="number" name="mmamt" ></td>	
					</tr>	
				</table>	
			</fieldset>
			<br>

			<fieldset>
				<legend>*Financial Details:</legend>
				<table>
					<tr>
						<td>Monthly Expenses:</td>
						<td><input type="number" name="monthlyexpenses" required><span class="star">*</span></td>
					</tr>
					<tr>
						<td>Total Income:</td>
						<td><input type="number" name="totalincome" required><span class="star">*</span></td>
					</tr>
					<tr>
						<td>Sources:</td>
						<td>
							<input type="checkbox" name="sources[]" value="agri">Agriculture<br>
							<input type="checkbox" name="sources[]" value="animal">Animals<br>
  							<input type="checkbox" name="sources[]" value="Govt">Govt. Job<br>
  							<input type="checkbox" name="sources[]" value="private">Private Job<br>
  							<input type="checkbox" name="sources[]" value="buiness">Business<br>
  							<input type="checkbox" name="sources[]" value="other">Other<br>
						</td>
					</tr>
						
				</table>	
			</fieldset>
			<br>

			<fieldset>
				<legend>*Loan Details:</legend>
				<table>
					<tr>
						<td>Loan Taken:</td>
						<td><select name="loan_taken" required>
							<option disabled selected value=""> -- Select an Option -- </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="star">*</span></td>
					
						<td>If Yes,Total Loan Amount:</td>
						<td><input type="number" name="loantakenamount" ></td>
					
						<td>Loan Installment per Month:</td>
						<td><input type="number" name="installments" ></td>
					</tr>
					<tr>
						<td>Loan Needed:</td>
						<td><select name="loan_needed" required>
							<option disabled selected value=""> -- Select an Option -- </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="star">*</span>
						</td>
											
						<td>Total Loan Amount Needed:</td>
						<td><input type="number" name="loanneeded" ></td>
				
						<td>Purpose of Loan:</td>
						<td><input type="text" name="loanpurpose" placeholder="ex-fishery,poultry" ></td>
					</tr>
				</table>	
			</fieldset>
			<br>

			<fieldset>
				<legend>*Educational Details:</legend>
				<table>
					<tr>
						<td>Who is taking education: </td>
						<td>1. <select name="take_edu1" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Son">Son</option>
							<option value="Daughter">Daughter</option>
							</select>
						</td>
						<td>2. <select name="take_edu2" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Son">Son</option>
							<option value="Daughter">Daughter</option>
							</select>
						</td>
						<td>3. <select name="take_edu3" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Son">Son</option>
							<option value="Daughter">Daughter</option>
							</select>
						</td>

					</tr>
					<tr>
						<td>Type of Education:</td>
						<td>1. <select name="edu_type1" required>
								<option disabled selected value=""> -- Select an Option -- </option>
								<option value="-">None</option>
								<option value="Kids">Kids</option>
								<option value="School">School</option>
								<option value="College">Jr.College</option>
								<option value="Diploma">Diploma</option>
								<option value="Degree">Degree</option>
							</select>
						</td>
						<td>2. <select name="edu_type2" required>
								<option disabled selected value=""> -- Select an Option -- </option>
								<option value="-">None</option>
								<option value="Kids">Kids</option>
								<option value="School">School</option>
								<option value="College">Jr.College</option>
								<option value="Diploma">Diploma</option>
								<option value="Degree">Degree</option>
							</select>
						</td>
						<td>3. <select name="edu_type3" required>
								<option disabled selected value=""> -- Select an Option -- </option>
								<option value="-">None</option>
								<option value="Kids">Kids</option>
								<option value="School">School</option>
								<option value="College">Jr.College</option>
								<option value="Diploma">Diploma</option>
								<option value="Degree">Degree</option>
							</select>
						</td>
					</tr>
					<tr>
						<td> Do you get Scholarship? :</td>
						<td>  <select name="get_schship" required>
							<option disabled selected value=""> -- Select an Option -- </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</td>
						<td>Total Scholarship Amount:</td>
						<td><input type="number" name="schshipamt" ></td>
					</tr>

					<tr>
						<td> Do you need Scholarship? :</td>
						<td>  <select name="need_schship" required>
							<option disabled selected value=""> -- Select an Option -- </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</td>
						<td>Expected Scholarship Amount:</td>
						<td><input type="number" name="schshipneedamt" ></td>
					</tr>
						
				</table>	
			</fieldset>
			<br>


			<fieldset>
				<legend>*Employment Details:</legend>
				<table>
					<tr>
						<td>Who is Employed:</td>
						<td>1. <select name="who_employed1" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Husband">Husband</option>
							<option value="Father">Father</option>
							<option value="Wife">Wife</option>
							<option value="Mother">Mother</option>
							<option value="Son">Son</option>
							<option value="Daughter">Daughter</option>
							</select>
						</td>
						<td>2. <select name="who_employed2" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Husband">Husband</option>
							<option value="Father">Father</option>
							<option value="Wife">Wife</option>
							<option value="Mother">Mother</option>
							<option value="Son">Son</option>
							<option value="Daughter">Daughter</option>
							</select>
						</td>

					</tr>
					<tr>
						<td>Who need Job:</td>
						<td>1. <select name="need_job1" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Husband">Husband</option>
							<option value="Father">Father</option>
							<option value="Wife">Wife</option>
							<option value="Mother">Mother</option>
							<option value="Son">Son</option>
							<option value="Daughter">Daughter</option>
							</select>
						</td>
						<td>2. <select name="need_job2" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Husband">Husband</option>
							<option value="Father">Father</option>
							<option value="Wife">Wife</option>
							<option value="Mother">Mother</option>
							<option value="Son">Son</option>
							<option value="Daughter">Daughter</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Education of job needy:</td>
						<td>1. <select name="edu_job_need1" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Kids">Kids</option>
							<option value="PreSchool"> below 9th</option>
							<option value="School">SSC</option>
							<option value="College">HSC</option>
							<option value="Diploma">Diploma</option>
							<option value="Degree">Degree</option>
							</select>
						</td>
						<td>2. <select name="edu_job_need2" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Kids">Kids</option>
							<option value="PreSchool"> below 9th</option>
							<option value="School">SSC</option>
							<option value="College">HSC</option>
							<option value="Diploma">Diploma</option>
							<option value="Degree">Degree</option>
							</select></td>
					</tr>
					
				</table>	
			</fieldset>
			<br>

			<fieldset>
				<legend>*Self-Employment Details:</legend>
				<table>
					<tr>
						<td>Self Employed:</td>
						<td><select name="self_employed" required>
							<option disabled selected value=""> -- Select an Option -- </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="star">*</span>
						</td>
						<td>If Yes,then Profession:</td>
						<td><input type="text" name="profession" ></td>
					</tr>
					<tr>
						<td>Who is Self-Employed:</td>
						<td><select name="who_selfemployed1" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Husband">Husband</option>
							<option value="Father">Father</option>
							<option value="Wife">Wife</option>
							<option value="Mother">Mother</option>
							<option value="Son">Son</option>
							<option value="Daughter">Daughter</option>
							</select>
						</td>
						<td><select name="who_selfemployed2" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Husband">Husband</option>
							<option value="Father">Father</option>
							<option value="Wife">Wife</option>
							<option value="Mother">Mother</option>
							<option value="Son">Son</option>
							<option value="Daughter">Daughter</option>
							</select>
						</td>

					</tr>
					<tr>
						<td>Need to do Self-business? :</td>
						<td><select name="need_selfb" required>
								<option disabled selected value=""> -- Select an Option -- </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="star">*</span>
						</td>
						<td>If Yes, Which Self-Business you could do?:</td>
						<td><input type="text" name="which_selfbusiness" >
						</td>
					</tr>
					<tr>
						<td>Which type of help needed:</td>
						<td><select name="help_type_selfb" required>
								<option disabled selected value=""> -- Select an Option -- </option>
								<option value="-">None</option>
								<option value="Financial">Financial</option>
								<option value="Knowledge">Knowledge</option>
								<option value="Other">Other</option>
								
							</select>
						</td>
					</tr>
					<tr>
						<td>Expected Investment:</td>
						<td><input type="number" name="selfb_investment">
							
						</td>
					</tr>
					<tr>
						<td>Return Policy:</td>
						<td><input type="text" name="policy" placeholder="per month">
						</td>
					</tr>

				</table>	
			</fieldset>
			<br>


			<fieldset>
				<legend>*Health Details:</legend>
				<table>
					<tr>
						<td>Who need help?:</td>
						<td><select name="who_need_health_help1" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Husband">Husband</option>
							<option value="Father">Father</option>
							<option value="Wife">Wife</option>
							<option value="Mother">Mother</option>
							<option value="Son">Son</option>
							<option value="Daughter">Daughter</option>
							</select>
						</td>
						<td><select name="who_need_health_help2" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Husband">Husband</option>
							<option value="Father">Father</option>
							<option value="Wife">Wife</option>
							<option value="Mother">Mother</option>
							<option value="Son">Son</option>
							<option value="Daughter">Daughter</option>
							</select>
						</td>

					</tr>
					<tr>
						<td>if Yes, Which kind of help you needed?:</td>
						<td><input type="text" name="healthkindhelp" >
						</td>
					</tr>

					<tr>
						<td>Expected Cost:</td>
						<td><input type="number" name="healthcost" >
							
						</td>
					</tr>

				</table>	
			</fieldset>
			<br>

			<fieldset>
				<legend>*Expected Help:</legend>
				<table>
					<tr>
						<td>Need help?:</td>
						<td><select name="exp_help" required>
							<option disabled selected value=""> -- Select an Option -- </option>
							<option value="-">None</option>
							<option value="Society">Society</option>
							<option value="Govt">Govt</option>
							<option value="Youth">Youth</option>
							<option value="Other">Other</option>
							</select>
							<span class="star">*</span>
						</td>
					</tr>

				</table>	
			</fieldset>
			<br>

			<fieldset>
				<legend>*Livelihood Status:</legend>
				<textarea name="liveli" rows="5" cols="80"></textarea>
			</fieldset>
			<br>

			<fieldset>
				<legend>*Improvements needed:</legend>
				<textarea name="improvments" rows="5" cols="80"></textarea>
			</fieldset>
			<br>

			</div>


	<div class="submitdata">
		<table>
			<tr>
			<td><input type="reset" value="Reset"></td>
			<td><input type="submit" value="Submit"></td>
			</tr>
	</table>
	</div>
</form>
</div>


	</div>
</body>
</html>




	