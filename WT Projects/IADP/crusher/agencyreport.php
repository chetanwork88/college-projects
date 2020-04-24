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
        <li><a  href="materialreport.php" target="_top">Material-wise Reports</a></li>
        <li><a class="active1"  href="agencyreport.php" target="_top">Agency-wise Reports</a></li>
    </ul>


   </div>

<div class="datereport">
   <form action="" method="POST">
    <table>
     <tr>
      <td>Agency Name</td>
      <td>:</td>
      <td> <input type="text" name="inputagency"></td>
      <td><input type="submit" name="agencysubmit" value="Search"></td>
    </tr>
   </table>
   </form>
</div>

<div class="table-responsive">

    <?php
          session_start();
          if(isset($_REQUEST['agencysubmit']))
            {
              agencyreport();  
            }

            function agencyreport()
            {
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "crusher";

              $_SESSION["inputagency"]=$_POST['inputagency'];
              $inputagency=$_SESSION['inputagency'];
              
              $conn = new mysqli($servername, $username, $password, $dbname);

          // Check connection
            if ($conn->connect_error) 
            {
              die("Connection failed: " . $conn->connect_error);
            }

            $sql="SELECT material,COUNT(vno),SUM(quantity),date1 FROM details WHERE agency='$inputagency' GROUP BY material,date1";

            $result = $conn->query($sql);
            echo "<h3> Agency Name : ".$inputagency."</h3>" ;
          if ($result->num_rows > 0) 
            {
              echo "<table>
              <tr>
              <th>Material</th>
              <th>Total Vehicles</th>
              <th>Total Quantity</th>
              <th>Date</th>
              </tr>";
                while($row = $result->fetch_assoc())
                  {
                  echo "<tr>";
                echo "<td>" . $row['material'] . "</td>";
                echo "<td>" . $row['COUNT(vno)'] . "</td>";
                echo "<td>" . $row['SUM(quantity)'] . "</td>";
                echo "<td>" . $row['date1'] . "</td>";
                echo "</tr>";
                  }
                echo"</table>";
                echo "<form action='agencypdf.php' target='_blank'><input type='submit' name='print' value='Print' style='margin:50px 0px 20px 600px' ></form>";
            } 
            else 
            {
              echo "<h3>No records Found..</h3>";
            }   
        $conn->close();
            }

     ?>
   </div>

<!-- -------------------------Printing code-------------------- -->






</body>
</html>