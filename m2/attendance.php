<?php
require_once 'phpqrcode/qrlib.php';
include("databases.php");

$no = $_GET["no"];


$loc=  "localhost/mygrp/m3/CommitteAttendance.php?no=$no";
$loc2=  "localhost/mygrp/m3/eventd.php?no=$no";

$ppl = "Participant";
$ppl2 = "committee";


$qrImg = "participant".rand();
$qrImg2 = "committee".rand();

$qrs = QRcode::png($loc,"qrimage/$qrImg.png", 'L', 10 ,2);
$qrs2 = QRcode::png($loc2,"qrimage/$qrImg2.png", 'L', 10 ,2);

$qrlink = $qrImg.".png";
$qrlink2 = $qrImg2.".png";

$sql = "INSERT INTO qrcode VALUES('','$loc','$qrlink2','$qrlink','$no');";
$result = mysqli_query($link,$sql);
if($result){
							$message = "The  QR code are created!";
      						echo "<script type='text/javascript'>alert('$message');
      						window.location = 'QRcode.php';</script>";
						}
						else{
							$message = "sorry, the QR code had already created";
      						echo "<script type='text/javascript'>alert('$message');
      						window.location = 'QRcode.php';</script>";
						}

?>
<center><br><button onclick="location.href='QRcode.php'">Back</button> 