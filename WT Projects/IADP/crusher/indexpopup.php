<?php 

if(isset($_POST["submit"]))
{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crusher";


        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
      

        $sno=$_POST['sno'];
        $vno=$_POST['vno'];
        $material=$_POST['material'];
        $quantity=$_POST['quantity'];
        $agency=$_POST['agency'];
        $fname=ucfirst($_POST['fname']);
        $mname=ucfirst($_POST['mname']);
        $lname=ucfirst($_POST['lname']);
        $intime=$_POST['intime'];
        $outime=$_POST['outime'];
        $pass=$_POST['getpass'];

        $sql = "INSERT INTO details VALUES (DEFAULT,'$vno','$material','$quantity','$agency','$fname','$mname','$lname','$intime','$outime','$pass',sysdate()) ";

        if ($conn->query($sql) === TRUE) 
        {
            header("location: indexpopup.php");
        }
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

$conn->close();
}
        
?>



<!DOCTYPE html>
<html>
<head>
    <title>Crusher</title>

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
        <li><a href="reportlogin.php" target="_top"><i class="glyphicon glyphicon-info-sign"></i>REPORTS</a></li>  
        <li><a class="active" href="index.php" target="_top"><i class="glyphicon glyphicon-home"></i> FILL THE FORM</a></li>    
        </div>
    </ul>
   </div>


                      <!-------------------- form----------------- -->
   <div  class="container-fluid" id="form">
    <div class="lheading">Fill The Form Given Below</div>
    <table>
        <form action="" method="POST">
            <!-- <tr>
                <td>
                    S.No
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="sno" required><span class="star">*</span>
                </td>
            </tr>    -->

            <tr>
                <td>
                    Vehicle No
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="vno" placeholder="Ex- MH-12 AB-1234 " title="Please follow this format only= MH-12 AB-1234" required><span class="star">*</span>
                </td>
            </tr>   

            <tr>
                <td>
                    Material
                </td>
                <td>
                    :
                </td>
                <td>
                    <select name="material" required>
                                <option disabled selected value=""> --- Select an Option --- </option>
                                <option value="a">a</option>
                                <option value="b">b</option>
                                <option value="c">c</option>
                                <option value="d">d</option>
                                <option value="e">e</option>
                                <option value="f">f</option>
                    </select><span class="star">*</span>
                </td>
            </tr>

            <tr>
                <td>
                    Quantity
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="quantity" required><span class="star">*</span>
                </td>
            </tr>

            <tr>
                <td>
                    Agency
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="agency" required><span class="star">*</span>
                </td>
            </tr>

            <tr>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    <input type="text" name="fname" placeholder="First Name" required><span class="star">*</span>
                </td>
            </tr>

            <tr>
                <td>
                    Driver Name
                </td>
                <td>
                    :
                </td>      
                <td>
                    <input type="text" name="mname" placeholder="Middle Name">
                </td>
            </tr>

            <tr>
                <td>
                    
                </td>
                <td>
                    
                </td>                
                <td>
                    <input type="text" name="lname" placeholder="Last Name" required><span class="star">*</span>
                </td>
            </tr>

            <tr>
                <td>
                    In Time
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="time" name="intime" required><span class="glyphicon glyphicon-time"></span><span class="star">*</span>
                </td>
            </tr>

            <tr>
                <td>
                    Out Time
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="time" name="outime" required><span class="glyphicon glyphicon-time"></span><span class="star">*</span>
                </td>
            </tr>

            <tr>
                <td>
                    Get Pass
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="getpass" required><span class="star">*</span>
                </td>
            </tr>

            <tr>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td class="submitdata">
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>


        </form>

    </table>

   </div>

</body>
</html>


<?php
$message = "Data submitted Successfully..";
echo "<script type='text/javascript'>alert('$message');</script>";
?>