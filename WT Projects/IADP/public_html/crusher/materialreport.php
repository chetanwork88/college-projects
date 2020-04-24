<!DOCTYPE html>
<html lang="en">
<head>
    <title>MaterialReport</title>
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
                <li><a href="fillform.php">Fill The Form</a></li>
                <li class="active"><a href="checkreportadmin.php">Reports</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
</nav>


<!----------------------------------logged username------------------------------------>

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
	
<!-----------------------------------------------buttons--------------------------------------------->	
<div class="row">
  <a href="datereport.php">   <div class="col-sm-4 bg-primary " id="reportbtn">Date-wise Report</div></a>
   <a href="materialreport.php">  <div class="col-sm-4 bg-primary active" id="reportbtn">Material-wise Report</div></a>
   <a href="agencyreport.php">  <div class="col-sm-4 bg-primary" id="reportbtn">Agency-wise Report</div></a>
</div>


<!-------------------------------------main table input-------------------------------------------->
<div class="reportinput">
<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
      <form action="" role="form" method="post">
  <div class="form-group">
    <label>Material:</label>
    <select class="form-control" name="inputmaterial" required>
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
    <label>*Material IN/OUT :</label>
    <div class="radio">
      <label><input type="radio" name="optradio"value="IN" required>IN (Buy)</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="OUT" required>OUT (Sell)</label>
    </div>
  </div>
  
  <div class="col-md-12 text-center">
  <input type="submit" class="btn btn-primary btn-md" name="materialsubmit" value="Search">
  </div>
  
   </form>
    </div>
 </div>
</div>


<!------------------------------------------table output-------------------------------------------->
<div class="table-responsive" id="reportable">
    
    
   <?php
          session_start();
          if(isset($_REQUEST['materialsubmit']))
            {
                echo "<h3 class='text-center bg-danger'>Material Name : ".$_SESSION['inputmaterials']."</h3>" ;
                echo "<h3 class='text-center bg-danger'>Material(IN/OUT) : ".$_SESSION['buyorsells']."</h3>" ;
              datereport();  
            }

            function datereport()
            {
              $servername = "5.189.157.161";
              $username = "iadpindi_admin";
              $password = "Admin@123";
              $dbname = "iadpindi_iadp";
             
              $_SESSION["inputmaterials"]=$_POST['inputmaterial'];
              $inputmaterial=$_SESSION['inputmaterials'];
              
              $_SESSION["buyorsells"]=$_POST['optradio'];
              $buyorsell=$_SESSION["buyorsells"];
              $conn = new mysqli($servername, $username, $password, $dbname);
             
              
               // Check connection
                  if ($conn->connect_error) 
                   {
                     die("Connection failed: " . $conn->connect_error);
                   }
                   
                   $sql="SELECT srno,agency,quantity,quantityunit,fname,mname,lname FROM crusherdetails WHERE material='$inputmaterial' AND inorout='$buyorsell'";
 
                   $result = $conn->query($sql);
          if ($result->num_rows > 0) 
            {
              echo "<table>
              <tr>
              <th>Sr No.</th>
              <th>Agency Name</th>
              <th>Quantity</th>
              <th colspan='3'>Driver Name</th>
              </tr>

              <tr>
              <th></th>
              <th></th>
              <th></th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th></th>
              </tr>";
                while($row = $result->fetch_assoc())
                  {
                  echo "<tr>";
                echo "<td>" . $row['srno'] . "</td>";
                echo "<td>" . $row['agency'] . "</td>";
                echo "<td>" . $row['quantity'] ." ".$row['quantityunit']. "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['mname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "</tr>";
                  }
                echo"</table>";
                
                echo ' <div class="col-sm-4 col-sm-offset-4">
                          <form action="materialpdf.php" target="_blank"  role="form" method="post">
                            <div class="col-md-12 text-center">
                               <input type="submit" class="btn btn-primary btn-md" name="print" value="Print" style="margin-top:20px">
                            </div>
                         </form>
                        </div>';
            } 
            else 
            {
              echo "<h3>No records Found..</h3>";
            }   
        $conn->close();
            }
     ?>
    
    
    
</div>


</body>
</html>









