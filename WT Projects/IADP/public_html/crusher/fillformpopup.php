
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
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
    
<!--------------------------------navbar------------------------->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar" id="collapsebtn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">M/s. Y. V. Fargade & Co<sup>&#8482</sup></a>
        </div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="fillform.php">Fill The Form</a></li>
                <li><a href="checkreportadmin.php">Reports</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
</nav>


<!----------------------------------logged username----------------------->

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
                $sql = "SELECT fname,lname FROM crusherlogin WHERE username='$user'";
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
	
<!--------------------------------Form----------------------------->
<div class="fillform">
<div class="container-fluid">
    <div class="col-sm-4 col-sm-offset-4">
      <h1 class="text-center">Fill The Details.</h1>
      
      <form action="insertdata.php" role="form" method="post">
          

  <div class="form-group">
    <label>*Material IN/OUT :</label>
    <div class="radio">
      <label><input type="radio" name="optradio"value="IN" checked>IN (Buy)</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="OUT">OUT (Sell)</label>
    </div>
  </div>
  
  <div class="form-group">
    <label>*Vehicle No :</label>
    <input type="text" class="form-control" name="vno" placeholder="Enter Vehicle Number" required>Ex- MH-12 AB-1234 (Please follow the exact format. )
  </div>
  <div class="form-group">
    <label>*Material :</label>
        				<select class="form-control" name="material" required>
								<option disabled selected value=""> --- Select an Option --- </option>
								<option value="40 mm">40 mm</option>
                                <option value="20 mm">20 mm</option>
                                <option value="10 mm">10 mm</option>
                                <option value="Crush">Crush</option>
                                <option value="Sand">Sand</option>
                                <option value="GSB">GSB</option>
                                <option value="Murum">Murum</option>
                                <option value="Dubber">Dubber</option>
                                <option value="6 mm">6 mm</option>
                                <option value="BM">BM</option>
                                <option value="DBM">DBM</option>
                                <option value="Carpet">Carpet</option>
                                <option value="Bitumen">Bitumen</option>
                                <option value="Oil">Oil</option>
                                <option value="Cement">Cement</option>
                        </select>
  </div>
  
  <div class="form-group">
    <label>*Quantity :</label>
    <input type="text" class="form-control" name="quantity" placeholder="Enter the Quantity" required><br>
    <select class="form-control" name="quantityunit" required>
                                <option disabled selected value=""> --- Select the Unit --- </option>
								<option value="Brass">Brass</option>
                                <option value="Ton">Ton</option>
    </select>
    
  </div>
  <div class="form-group">
    <label>*Agency :</label>
    <input type="text" class="form-control" name="agency" placeholder="Enter the Agency Name" required>
  </div>
  <div class="form-group">
    <label>*Driver's First Name :</label>
    <input type="text" class="form-control" name="fname" placeholder="First Name" required>
  </div>
  <div class="form-group">
    <label>Driver's Middle Name :</label>
    <input type="text" class="form-control" name="mname" placeholder="Middle Name">
  </div>
  <div class="form-group">
    <label>*Driver's Last Name :</label>
    <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
  </div>
 
  <div class="form-group">
    <label>*In Time :</label>
    <input type="time" class="form-control" name="intime" placeholder="Enter the In-time for a vehicle" required>
  </div>
  
  <div class="form-group">
    <label>*Out-Time :</label>
    <input type="time" class="form-control" name="outime" placeholder="Enter the Out-time for a vehicle" required>
  </div>

  
  <div class="col-md-12 text-center">
  <input type="submit" class="btn btn-primary btn-md" value="Submit">
   <input type="reset" class="btn btn-danger btn-md" value="Reset">
  </div>
  
   </form>
    </div>

</div>
</div>	
	
</body>
</html>

<?php
$message = "Data submitted Successfully..";
echo "<script type='text/javascript'>alert('$message');</script>";
?>







