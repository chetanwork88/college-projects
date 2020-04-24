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
        $buyorsell=$_POST['optradio'];
        $vno=strtoupper($_POST['vno']);
        $material=$_POST['material'];
        
        $quantitynum=$_POST['quantity'];
        $quantityunit=$_POST['quantityunit'];

        $agency=ucfirst($_POST['agency']);
        $fname=ucfirst($_POST['fname']);
        $mname=ucfirst($_POST['mname']);
        $lname=ucfirst($_POST['lname']);
        $intime=$_POST['intime'];
        $outime=$_POST['outime'];
        
        $author=$_SESSION['id'];
        
        /*setting counter for the pass*/
        /*$sql1="SELECT date1 from crusherdetails ORDER BY srno DESC LIMIT 1";
        $result =$conn->query($sql1);
        while($row = $result->fetch_assoc())
		    {
		        $lastdate=$row['date1'];
		    }
        $today=date();
        if(strtotime($today) <= strtotime($lastadate))
        {
            $pass=$pass+1;
        }
        else
        {
            $pass=1;
        }*/

         
        $sql = "INSERT INTO crusherdetails VALUES (DEFAULT,'$buyorsell','$vno','$material','$quantitynum','$quantityunit','$agency','$fname','$mname','$lname',sysdate(),'$intime','$outime','$author')";
        
        if ($conn->query($sql) === TRUE) 
			{

   			header("Location:fillformpopup.php");
			}
	 	else 
	 		{
    		echo "Error: " . $sql . "<br>" . $conn->error;
	 		}

	 		$conn->close();

?>

