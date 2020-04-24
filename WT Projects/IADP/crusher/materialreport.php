<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>

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

    <div class="head1">
    <li><a href="index.php" target="_top">Crusher<sup>&#8482</sup></a></li>
    </div>
    <!--Collapsive button-->

    <div class="tabs">
    <li><a class="logoutcolor" href="#" target="_top"><i class="glyphicon glyphicon-user"></i> LOGOUT</a></li>
    <li><a class="logincolor" href="#" target="_top"><i class="glyphicon glyphicon-user"></i> SIGNUP</a></li>
    <li><a  class="active" href="reportlogin.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i> REPORTS</a></li>  
      <li><a  href="index.php" target="_top"><i class="glyphicon glyphicon-home"></i> FILL THE FORM</a></li>  
    </div>
  </ul>
   </div> 

   <!-- ------------------heading --------------->

 <div class="reportabs">

    <ul>
        <li><a  href="datereport.php" target="_top">Date-wise Reports</a> </li>
        <li><a class="active1" href="materialreport.php" target="_top">Material-wise Reports</a></li>
        <li><a  href="agencyreport.php" target="_top">Agency-wise Reports</a></li>
    </ul>


   </div>

<div class="datereport">
   <form action="" method="POST">
    <table>
     <tr>
      <td>Material</td>
      <td>:</td>
      <td> <input type="text" name="inputmaterial"></td>
      <td><input type="submit" name="materialsubmit" value="Search"></td>
    </tr>
   </table>
   </form>
</div>

<div class="table-responsive">

    <?php
             session_start();
          if(isset($_REQUEST['materialsubmit']))
            {
              materialreport();  
            }

            function materialreport()
            {
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "crusher";

              $_SESSION["inputmaterial"]=$_POST['inputmaterial'];
              $inputmaterial=$_SESSION['inputmaterial'];

              $conn = new mysqli($servername, $username, $password, $dbname);

          // Check connection
            if ($conn->connect_error) 
            {
              die("Connection failed: " . $conn->connect_error);
            }

            $sql="SELECT sno,agency,quantity,fname,mname,lname,pass FROM crusherdetails WHERE material='$inputmaterial'";

            $result = $conn->query($sql);
            echo "<h3> Material : ".$inputmaterial."</h3>" ;
          if ($result->num_rows > 0) 
            {
              echo "<table>
              <tr>
              <th>Sr No.</th>
              <th>Agency Name</th>
              <th>Quantity</th>
              <th colspan='3'>Driver Name</th>
              <th>Pass</th>
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
                echo "<td>" . $row['sno'] . "</td>";
                echo "<td>" . $row['agency'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['mname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['pass'] . "</td>";
                echo "</tr>";
                  }
                echo"</table>";
                echo "<form action='materialpdf.php' target='_blank'><input type='submit' name='print' value='Print' style='margin:50px 0px 20px 600px' ></form>";
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