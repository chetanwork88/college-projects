<?php
session_start();
$servername = "5.189.157.161";
$username = "iadpindi_admin";
$password = "Admin@123";
$dbname = "iadpindi_iadp";



$zid=$_POST['aadhar'];
$zfname=ucfirst($_POST['fname']);
$zmname=ucfirst($_POST['mname']);
$zlname=ucfirst($_POST['lname']);
$zaddress=$_POST['address'];
$zvillage=ucfirst($_POST['village']);
$ztaluka=ucfirst($_POST['taluka']);
$zdistrict=ucfirst($_POST['district']);
$zpincode=$_POST['pincode'];
$zstate=ucfirst($_POST['state']);
$zage=$_POST['age'];
$zcontact1=$_POST['pnum1'];
$zcontact2=$_POST['pnum2'];
$zfamily_mem=$_POST['famnum'];
$zland=$_POST['land'];
$zland_type=$_POST['land_type'];
$zincome=$_POST['grossincome'];

$zsoil_tested=$_POST['soil_tested'];
if($zsoil_tested=='Yes')
{
    $z1complete="No";
}
else
{
    $z1complete="Yes";
}

$zalready_own=$_POST['alown'];
$zalready_owned="";
foreach($zalready_own as $chk1)  
   {  
      $zalready_owned .= $chk1.", ";  
   } 

$zhorti_help=$_POST['horti_help'];
if($zhorti_help=='Yes')
{
    $z2complete="No";
}
else
{
    $z2complete="Yes";
}

$zhorti_amt=$_POST['hortiamt'];

$zdairy_help=$_POST['diary_help'];
if($zdairy_help=='Yes')
{
    $z3complete="No";
}
else
{
    $z3complete="Yes";
}
$zdairy_amt=$_POST['diaryamt'];
$zpoultry_help=$_POST['poultry_help'];
if($zpoultry_help=='Yes')
{
    $z4complete="No";
}
else
{
    $z4complete="Yes";
}
$zpoultry_amt=$_POST['poultryamt'];
$zfishery_help=$_POST['fishery_help'];
if($zfishery_help=='Yes')
{
    $z5complete="No";
}
else
{
    $z5complete="Yes";
}
$zfishery_amt=$_POST['fisheryamt'];
$zah_help=$_POST['ah_help'];
if($zah_help=='Yes')
{
    $z6complete="No";
}
else
{
    $z6complete="Yes";
}
$zah_amt=$_POST['ahamt'];

$zm=$_POST['modmet'];
$zmm="";
foreach($zm as $chk2)  
   {  
      $zmm .= $chk2.", ";  
   } 

if($zmm==NULL)
{
    $z7complete="Yes";
}
else
{
    $z7complete="No";
}
$zmm_amt=$_POST['mmamt'];
$zmonth_expenses=$_POST['monthlyexpenses'];
$ztotal_income=$_POST['totalincome'];

$zsource=$_POST['sources'];
$zsources="";
foreach($zsource as $chk3)  
   {  
      $zsources .= $chk3.", ";  
   } 

$zloan_taken=$_POST['loan_taken'];
$zloan_amt=$_POST['loantakenamount'];
$zloan_installment=$_POST['installments'];
$zloan_need=$_POST['loan_taken'];
$zamt_need=$_POST['loanneeded'];
$zloan_purpose=$_POST['loanpurpose'];
$ztaking_edu1=$_POST['take_edu1'];
$ztaking_edu2=$_POST['take_edu2'];
$ztaking_edu3=$_POST['take_edu3'];
$zedu_type1=$_POST['edu_type1'];
$zedu_type2=$_POST['edu_type2'];
$zedu_type3=$_POST['edu_type3'];
$zget_schship=$_POST['get_schship'];
$zget_schship_amt=$_POST['schshipamt'];
$zneed_schship=$_POST['need_schship'];
if($zneed_schship=='Yes')
{
    $z8complete="No";
}
else
{
    $z8complete="Yes";
}
$zneed_schship_amt=$_POST['schshipneedamt'];
$zemployed1=$_POST['who_employed1'];
$zemployed2=$_POST['who_employed2'];
$zneed_job1=$_POST['need_job1'];
if($zneed_job1==NULL)
{
    $z9complete="Yes";
}
else
{
    $z9complete="No";
}
$zneed_job2=$_POST['need_job2'];
$zjob_needy_edu1=$_POST['edu_job_need1'];
$zjob_needy_edu2=$_POST['edu_job_need2'];

$zself_employed=$_POST['self_employed'];
$zprofession=$_POST['profession'];
$zwho_selfemp1=$_POST['who_selfemployed1'];
$zwho_selfemp2=$_POST['who_selfemployed2'];
$zneed_selfb=$_POST['need_selfb'];
if($zneed_selfb=='Yes')
{
    $z10complete="No";
}
else
{
    $z10complete="Yes";
}
$zwhich_selfb=$_POST['which_selfbusiness'];
$zselfb_help_type=$_POST['help_type_selfb'];
$zselfb_invest=$_POST['selfb_investment'];

$zreturn_policy=$_POST['policy'];
$zhealth_help1=$_POST['who_need_health_help1'];
if($zhealth_help1==NULL)
{
    $z11complete="Yes";
}
else
{
    $z11complete="No";
}
$zhealth_help2=$_POST['who_need_health_help2'];
$zhealth_help_type=$_POST['healthkindhelp'];
$zhealth_help_cost=$_POST['healthcost'];
$zother_help=$_POST['exp_help'];

$zliveli_status=$_POST['liveli'];
$zimprovements=$_POST['improvments'];
$zcomplete="No";

if(isset($_SESSION['id']))
{
	$zauthor=$_SESSION['id'];
}else{
	$zauthor=" ";
}
// Create connection
if(!isset($_POST['submit'])){ 

	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	}
		$sql1="SELECT aadhar_no FROM details WHERE aadhar_no = '$zid'";

	$result =$conn->query($sql1);
	if($result->num_rows == 0) 
	{
     	//if user doesn't exist

     	$sql = "INSERT INTO details VALUES (DEFAULT,'$zid','$zfname','$zmname','$zlname','$zaddress','$zvillage','$ztaluka','$zdistrict','$zpincode','$zstate','$zage','$zcontact1','$zcontact2','$zfamily_mem','$zland','$zland_type','$zincome','$zsoil_tested','$z1complete','$zalready_owned','$zhorti_help','$zhorti_amt','$z2complete','$zdairy_help','$zdairy_amt','$z3complete','$zpoultry_help','$zpoultry_amt','$z4complete','$zfishery_help','$zfishery_amt','$z5complete','$zah_help','$zah_amt','$z6complete','$zmm','$zmm_amt','$z7complete','$zmonth_expenses','$ztotal_income','$zsources','$zloan_taken','$zloan_amt','$zloan_installment','$zloan_need','$zamt_need','$zloan_purpose','$ztaking_edu1','$ztaking_edu2','$ztaking_edu3','$zedu_type1','$zedu_type2','$zedu_type3','$zget_schship','$zget_schship_amt','$zneed_schship','$zneed_schship_amt','$z8complete','$zemployed1','$zemployed2','$zneed_job1','$zneed_job2','$zjob_needy_edu1','$zjob_needy_edu2','$z9complete','$zself_employed','$zprofession','$zwho_selfemp1','$zwho_selfemp2','$zneed_selfb','$zwhich_selfb','$zselfb_help_type','$zselfb_invest','$z10complete','$zreturn_policy','$zhealth_help1','$zhealth_help2','$zhealth_help_type','$zhealth_help_cost','$z11complete','$zother_help','$zliveli_status','$zimprovements','$zauthor',sysdate(),'$zcomplete') ";

     	if ($conn->query($sql) === TRUE) 
			{

   			header("Location:index.php");
			}
	 	else 
	 		{
    		echo "Error: " . $sql . "<br>" . $conn->error;
	 		}

	 		$conn->close();
	} 
	else
	{		
    	header("location:Apply.php");
	}
	$conn->close();

}
/*else{
	echo "<script> alert('Invalid Credentials...');</script>";
}
/*else
{
	echo "<script> alert('Invalid Credentials...'); window.location.href='Signin.php';</script>";
}*/
?>


<!-- (id,fname,mname,lname,address,village,taluka,district,pincode,state,age,contact1,contact2,family_mem,land,land_type,income,soil_tested,already_owned,horti_help,horti_amt,dairy_help,dairy_amt,poultry_help,poultry_amt,fishery_help,fishery_amt,ah_help,ah_amt,mm,mm_amt,month_expenses,total_income,sources,loan_taken,loan_amt,loan_installment,loan_need,amt_need,loan_purpose,taking_edu1,taking_edu2,taking_edu3,edu_type1,edu_type2,edu_type3,get_schship,get_schship_amt,need_schship,need_schship_amt,employed1,employed2,need_job1,need_job2,job_needy_edu1,job_needy_edu2,self_employed,profession,who_selfemp1,who_selfemp2,need_selfb,which_selfb,selfb_help_type,selfb_invest,return_policy,health_help1,health_help2,health_help_type,health_help_cost,other_help,liveli_status,improvements,author) -->

<!-- '$zid','$zfname','$zmname','$zlname','$zaddress','$zvillage','$ztaluka','$zdistrict','$zpincode','$zstate','$zage','$zcontact1','$zcontact2','$zfamily_mem','$zland','$zland_type','$zincome','$zsoil_tested','$zalready_owned','$zhorti_help','$zhorti_amt','$zdairy_help','$zdairy_amt','$zpoultry_help','$zpoultry_amt','$zfishery_help','$zfishery_amt','$zah_help','$zah_amt','$zmm','$zmm_amt','$zmonth_expenses','$ztotal_income','$zsources','$zloan_taken','$zloan_amt','$zloan_installment','$zloan_need','$zamt_need','$zloan_purpose','$ztaking_edu1','$ztaking_edu2','$ztaking_edu3','$zedu_type1','$zedu_type2','$zedu_type3','$zget_schship','$zget_schship_amt','$zneed_schship','$zneed_schship_amt','$zemployed1','$zemployed2','$zneed_job1','$zneed_job2','$zjob_needy_edu1','$zjob_needy_edu2','$zself_employed','$zprofession','$zwho_selfemp1','$zwho_selfemp2','$zneed_selfb','$zwhich_selfb','$zselfb_help_type','$zselfb_invest','$zreturn_policy','$zhealth_help1','$zhealth_help2','$zhealth_help_type','$zhealth_help_cost','$zother_help','$zliveli_status','$zimprovements','$zauthor' -->