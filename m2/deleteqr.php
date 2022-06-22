<?php
include("databases.php");

$no = $_GET["no"];

$sql = "DELETE FROM qrcode WHERE pro_id = '$no' ";
$result = mysqli_query($link,$sql);
if($result){
							$message = "The  QR code had beeen delete!";
      						echo "<script type='text/javascript'>alert('$message');
      						window.location = 'QRcode.php';</script>";
						}
						else{
							$message = "sorry, cannot delete";
      						echo "<script type='text/javascript'>alert('$message');
      						window.location = 'QRcode.php';</script>";
						}

?>
<center><br><button onclick="location.href='QRcode.php'">Back</button> 