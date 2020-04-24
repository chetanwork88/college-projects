<?php
session_start();
require('./fpdf/fpdf.php'); 


 Class dbObj{
                      /* Database connection start */
var $dbhost = "localhost";
var $username = "root";
var $password = "";
var $dbname = "crusher";
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
    $this->Cell(80,10,'Agency-wise List',1,0,'C');
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
$inputagency=$_SESSION['inputagency'];
$db = new dbObj();
$connString =  $db->getConnstring();
/*$display_heading = array('material'=>'ID', 'COUNT(vno)'=> 'Vehicles', 'SUM(quantity)'=> 'Quantity','date1'=> 'Date',);*/
 
$result = mysqli_query($connString, "SELECT material,COUNT(vno),SUM(quantity),date1 FROM details WHERE agency='$inputagency' GROUP BY material,date1") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM employee");
 
$pdf = new PDF();
//header
$pdf->AddPage();
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
$pdf->SetLeftMargin(20);
$pdf->SetFontSize(15);
$pdf->Cell(70,10,'Agency Name :',0,0,'C');
$pdf->Cell(150,10,$inputagency,0,0,'L');
$pdf->Ln(15);
$pdf->Cell(40,10,'Material',1,0,'C');
$pdf->Cell(40,10,'Total Vehicles',1,0,'C');
$pdf->Cell(40,10,'Total Quantity',1,0,'C');
$pdf->Cell(40,10,'Date',1,0,'C');

foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1,0,'C');
}
$pdf->Output();
?>