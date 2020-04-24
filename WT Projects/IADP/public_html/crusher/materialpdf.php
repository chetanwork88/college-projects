<?php
session_start();
require('./fpdf/fpdf.php'); 


 Class dbObj{
                      /* Database connection start */
var $dbhost = "5.189.157.161";
var $username = "iadpindi_admin";
var $password = "Admin@123";
var $dbname = "iadpindi_iadp";
var $conn;
function getConnstring() {
$con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());
 
/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
} else {
$this->conn = $con;
}
return $this->conn;
}
}

 class PDF extends FPDF  
{
// Page header
function Header()
{
    // Logo
 
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->SetFontSize(20);
    $this->Cell(150,10,'Material-wise List',1,0,'C');
    // Line break
    $this->Ln(15);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$inputmaterial=$_SESSION['inputmaterials'];
$buyorsell=$_SESSION["buyorsells"];
$db = new dbObj();
$connString =  $db->getConnstring();
/*$display_heading = array('material'=>'ID', 'COUNT(vno)'=> 'Vehicles', 'SUM(quantity)'=> 'Quantity','date1'=> 'Date',);*/
 
$result = mysqli_query($connString, "SELECT srno,agency,quantity,quantityunit,fname,mname,lname FROM crusherdetails WHERE material='$inputmaterial' AND inorout='$buyorsell'") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM employee");
 
$pdf = new PDF();
//header
$pdf->AddPage('A5');
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
$pdf->SetMargins(20,2,2);
/*
if (is_array($header)) 
{
foreach($header as $heading) {
$pdf->Cell(40,12,$display_heading[$header['Field']],1);
}
}*/
$pdf->SetLeftMargin(30);
$pdf->SetFontSize(15);
$pdf->Cell(70,10,'Material :',0,0,'C');
$pdf->Cell(150,10,$inputmaterial,0,0,'L');
$pdf->Ln(15);
$pdf->Cell(70,10,'Material(IN/OUT) :',0,0,'C');
$pdf->Cell(150,10,$buyorsell,0,0,'L');
$pdf->Ln(15);
$pdf->Cell(35,10,'Sr No.',1,0,'C');
$pdf->Cell(35,10,'Agency Name',1,0,'C');
$pdf->Cell(35,10,'Quantity',1,0,'C');
$pdf->Cell(35,10,'Unit',1,0,'C');
$pdf->Cell(35,10,'First Name',1,0,'C');
$pdf->Cell(35,10,'Middle Name',1,0,'C');
$pdf->Cell(35,10,'Last Name',1,0,'C');



foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(35,10,$column,1,0,'C');
}
$pdf->Output();
?>