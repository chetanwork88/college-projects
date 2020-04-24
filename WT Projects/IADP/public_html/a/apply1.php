<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agricultural Details</title>
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
                <li><a class="active" href="apply.php" target="_top"><i class="glyphicon glyphicon-list-alt"></i> APPLY HERE</a></li>
                <li><a href="projects.php" target="_top"><i class="glyphicon glyphicon-dashboard"></i>PROJECTS</a></li>
                <li><a href="checkreport.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i> REPORTS</a></li>
                <li><a href="about.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i>ABOUT US</a></li>
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
	
	
	<!-----------------------------------------sidebar--------------------------------------->

<!--<div class="optionbar">	
	<nav class="navbar navbar-expand-sm bg-light">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar1" id="collapsebtn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Options:</a>
        </div>
        
        <div class="collapse navbar-collapse" id="mainNavBar1">
            <ul class="nav navbar-nav">
                <li><a href="#" class="active">Personal Details</a></li>
                <li><a href="">Agriculture Details</a></li>
                <li><a href="">Financial Details</a></li>
                <li><a href="">Educational Details</a></li>
                <li><a href="">Employment Details</a></li>
                <li><a href="">Health Details</a></li>
                <li><a href="">Other</a></li>
            </ul>
        </div>
  </nav>
</div>-->

<div class="sidebar">
  <a href="apply.php" class="active">Personal Details</a>
  <a href="apply1.php">Agriculture Details</a>
  <a href="apply2.php">Financial Details</a>
  <a href="#">Educational Details</a>
  <a href="#">Employment Details</a>
  <a href="#">Self-Employment Details</a>
  <a href="#">Health Details</a>
  <a href="apply7.php">Other</a>
</div>

<!-------------------------------------form--------------------------->
  <div class="content">
      
      
    <div class="container">
  <h2>Fill the following details.</h2>
  <p>(Fields marked with <span class="star">*</span> are compulsary.)</p>
  <form action="insertad.php" role="form" method="post">
      <hr/>
    <div class="form-group">
        <div class="row">
            <div class="col-md-3">
                <label><span class="star">*</span> Aadhar Number:</label>
                <input type="text" class="form-control" name="aadhar" minlength="12" maxlength="12" pattern="\d{12}" title="Only 12 digits are allowed." required>
            </div>
        </div>
    </div>  
      
    <div class="form-group">
        <div class="row">
            <div class="col-md-3">
                <label><span class="star">*</span> First name:</label>
                <input type="text" class="form-control" name="fname" pattern="[A-Za-z]+" minlength="2" title="Only Alphabets are allowed." required>
            </div>
            <div class="col-md-3">
                <label> Middle name:</label>
                <input type="text" class="form-control" pattern="[A-Za-z]+" minlength="2" title="Only Alphabets are allowed." name="mname">
            </div>
            <div class="col-md-3">
                <label><span class="star">*</span> Last name:</label>
                <input type="text" class="form-control"  pattern="[A-Za-z]+" minlength="2" title="Only Alphabets are allowed." name="lname" required>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-md-3">
                <label><span class="star">*</span> Contact Number:</label>
                <input type="text" class="form-control" name="pnum1" minlength ="10" maxlength ="10" pattern="\d{10}"  title="Only 10 digits are allowed." required>
            </div>
            <div class="col-md-3">
                <label> Alternate Contact Number:</label>
                <input type="text" class="form-control" name="pnum2"> 
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-md-3">
                <label><span class="star">*</span> Address:</label>
                <textarea name="address" class="form-control"  required></textarea>
            </div>
            <div class="col-md-3">
                <label><span class="star">*</span> Village/City:</label>
                <input type="text" class="form-control" name="village" pattern="[A-Za-z]+" minlength="2" title="Enter valid name." required>
            </div>
            <div class="col-md-3">
                <label><span class="star">*</span> Tehsil/Taluka:</label>
                <input type="text" class="form-control" name="taluka" pattern="[A-Za-z]+" minlength="2" title="Enter valid name." required></td>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-md-3">
                <label><span class="star">*</span> District:</label>
                <input type="text" class="form-control" name="district" pattern="[A-Za-z]+" minlength="2" title="Enter valid name." required>
            </div>
            <div class="col-md-3">
                <label><span class="star">*</span> Pin-Code:</label>
               <input type="text" class="form-control" name="pincode" minlength="6" maxlength="6" pattern="\d{6}" title="Only 6 digits are allowed." required>
            </div>
            <div class="col-md-3">
                <label><span class="star">*</span> State:</label>
                <input type="text" class="form-control" name="state" pattern="[A-Za-z]+" minlength="2" title="Enter valid state." value="Maharashtra" required>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-md-3">
                <label><span class="star">*</span> Age:</label>
                <input type="text" class="form-control" name="age" minlength="1" maxlength="3" pattern="[0-9]+" title="Only digits are allowed." required>
            </div>
            <div class="col-md-3">
                <label><span class="star">*</span> No. of family members:</label>
                <input type="text" class="form-control" name="famnum" minlength="1" maxlength="2" pattern="[0-9]+" title="Enter valid number." required>
            </div>
        </div>
    </div>
    
    <div class="col-md-8 text-center">
       <input type="submit" class="btn btn-primary btn-md" value="Next">
    </div>
  
    
</form>
</div>
      
      
  </div>
    
</body>
</html>