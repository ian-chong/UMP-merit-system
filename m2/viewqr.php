<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body
		{
			background-image:url(image/b1.jpg);
			background-size:cover;
			background-attachment:fixed;
		}
		.container-fluid
		{
			background-color:black;
			color: #FF8C00;
			font-size: 20px;
			width: 100%;
			height: 60px;
		}
		.logOut
		{
			background-color: black;
			color: white;
			font-size: 12px;
			column-width: 30%;
			height: 40px;
			border-color: black;
			cursor: pointer;
			position: absolute;
			top: 10px;
			right: 15px;
		}
		.logOut:hover
		{
			background-color:dimgray; 
			column-width: 30%;
			height: 40px;
			border-color: black;
			color: white;

		}
		p
		{
			background-color: black;
			color: #FF8C00;
			font-size: 12px;
			border-color: black;
			position: absolute;
			top: 25px;
			left: 180px;
		}
		#table
		{
			 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
		}
		#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}


#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #008CBA;
  color: white;
	</style>
	</head>
<body>
	<div class="container-fluid">
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span> MyMerit 
            	<button onclick="LogOut()" class="logOut">Log Out</button>
            </h1><p >system</p>
        </div>
<?php
include("databases.php");

$no = $_GET["no"];
$query = "SELECT * FROM qrcode WHERE pro_id = '$no' ";
$result = mysqli_query($link,$query);
?>
<?php
	if (mysqli_num_rows($result) > 0){
	?>
	    
			<h2 align="center">QR code</h2>
			<table id="table" align="center" border="1">
				<tr style="border-bottom: 1px solid black;height: 20%">
					<th align="center" style="width: 50%">participant QR code</th>
					<th align="center" style="width: 50%">Committee QR code</th>
				</tr>
			
 <?php
 $i=1;
	foreach($result as $row) 
	{
		echo "<tr>"
             . "<td><img src=qrimage/".$row['qr_par']."></td>"
             . "<td><img src=qrimage/".$row['qr_com']."></td>";
       		 ?>
 <?php
			echo "</tr>";
             $i++;
	}
	?>
	<?php
} else {
    echo "No result found!!";

}
?>
</table>
</body>
</html>