<?php
     session_start();
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

        $username=$_POST['username'];
        $password=md5($_POST['password']);

        $result = mysqli_query($conn,"SELECT * FROM crusherlogin WHERE username='$username' AND password='$password'");


       $count=mysqli_num_rows($result);
       if ($count == 1) 
       {
           $_SESSION['id']=$username;
          header("Location:fillform.php");
       }
       else
       {
        echo "<script> alert('Invalid Credentials...'); window.location.href='index.php';</script>";
       }



 $conn->close();       

?>