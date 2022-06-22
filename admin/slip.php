<?php 

include('includes/config.php');
include('includes/checklogin.php');
require_once('includes/fpdf/fpdf.php');

if (!isset($_SESSION)) {
  session_start();
}
?>


<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_Recordset1 = "-1";
if (isset($_GET['id'])) {
  $colname_Recordset1 = $_GET['id'];
}
mysql_select_db($database_localhost, $localhost);
$query_Recordset1 = sprintf("SELECT * FROM comm_detail RIGHT JOIN report_parmerit ON comm_detail.id = report_parmerit.pro_id", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $localhost) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

// $colname_Recordset2 = "-1";
// if (isset($_GET['id'])) {
  // $colname_Recordset2 = $_GET['id'];
// }
// mysql_select_db($database_localhost, $localhost);
// $query_Recordset2 = sprintf("SELECT id, DATE_FORMAT(programS_date, '%%M %%d, %%Y') AS programS_date, DATE_FORMAT(programE_date, '%%M %%d, %%Y') AS programE_date, DATEDIFF(dateEnd, dateStart) AS diff FROM reservation WHERE reservation.id = %s", GetSQLValueString($colname_Recordset2, "int"));
// $Recordset2 = mysql_query($query_Recordset2, $localhost) or die(mysql_error());
// $row_Recordset2 = mysql_fetch_assoc($Recordset2);
// $totalRows_Recordset2 = mysql_num_rows($Recordset2);

class PDF extends FPDF
{
function Header()
{
   
    $this->SetFont('Arial','B',18);
  
    $this->Cell(0,15,'Event Record',0,0,'C');

   
    $this->Ln(10);
	$this->SetFont('Arial','',16);
	$this->Cell(0,20,'Details',0,2,'C');
}
}

$program_name =  $row_Recordset1['program_name'];
$comm_no = $row_Recordset1['comm_no'];
$std_id = $row_Recordset2['std_id'];
$std_name= $row_Recordset2['std_name'];
$std_phone = $row_Recordset2['std_phone'];
$std_position = $row_Recordset2['std_position '];
$comm_merit=  $comm_merit;

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,8,'Prog Name: '.$program_name.'',0,2);
$pdf->Cell(0,8,'Comm Number: '.$comm_no.'',0,1);
$pdf->Cell(0,8,'Std ID: '.$std_id.'',0,1);
$pdf->Cell(0,8,'Std Name: '.$std_name.'',0,1);
$pdf->Cell(0,8,'Std HP: '.$std_phone.'',0,1);
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,8,'Std Position: '.$std_position.'',0,1);
$pdf->SetFont('Arial','B',21);
$pdf->Cell(0,15,'Comm Merit: '.$comm_merit.'',0,2);


$pdf->Output();
// default output set to I means to browser.

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event Program Slip</title>
<link href="style/sheet.css" rel="stylesheet"/>
</head>
<body>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
