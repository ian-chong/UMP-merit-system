<?php
require_once('databases.php');
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Program Coordinator Program Merit Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    	  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/figure.css" rel="stylesheet">
	<style type="text/css">
		body
		{
			background-image:url(image/b1.jpg);
			background-size:cover;
			background-attachment:fixed;
		}
		img
		{
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 30%;
		}
		.button1
		{
			background-color: #008CBA;
			border:blue;
			color: white;
			padding: 32px 16px;
			text-align: center;
			border-radius: 12px;
			display:inline-block;
			font-size: 32px;
			margin: 4px 2px;
			cursor: pointer;
			opacity: 0.6;
			transition: 0.3s;
			width: 100%
		}

		.button1:hover{opacity: 1}
		{
			background-color: white;
			color: black;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.button2
		{
			background-color: #008CBA;
			border:blue;
			color: white;
			padding: 32px 16px;
			text-align: center;
			border-radius: 12px;
			display:inline-block;
			font-size: 32px;
			margin: 4px 2px;
			cursor: pointer;
			opacity: 0.6;
			transition: 0.3s;
			width: 100%
		}

		.button2:hover{opacity: 1}
		{
			background-color: white;
			color: black;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.button3
		{
			background-color: #008CBA;
			border:blue;
			color: white;
			padding: 32px 16px;
			text-align: center;
			border-radius: 12px;
			display:inline-block;
			font-size: 32px;
			margin: 4px 2px;
			cursor: pointer;
			opacity: 0.6;
			transition: 0.3s;
			width: 100%
		}

		.button3:hover{opacity: 1}
		{
			background-color: white;
			color: black;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.button4
		{
			background-color: #008CBA;
			border:blue;
			color: white;
			padding: 32px 16px;
			text-align: center;
			border-radius: 12px;
			display:inline-block;
			font-size: 32px;
			margin: 4px 2px;
			cursor: pointer;
			opacity: 0.6;
			transition: 0.3s;
			width: 100%
		}

		.button4:hover{opacity: 1}
		{
			background-color: white;
			color: black;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		table.center
		{
			margin-left: auto;
			margin-right: auto; 
		}
		.container-fluid
		{
			background-color:black;
			color: #FF8C00;
			font-size: 20px;
			width: 100%;
			height: 70px;
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
		.dropbtn 
		{
 			background-color: black;
  			color: white;
 			padding: 10px;
  			font-size: 16px;
  			border: none;
  		    cursor: pointer;
  		    
		}
		.dropdown 
		{
  			position: relative;
 		    display: inline-block;
		}
		.dropdown-content 
		{
  			display: none;
 		    position: absolute;
  			background-color: black;
  			min-width: 260px;
  			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  			z-index: 1;
		}

		.dropdown-content a 
		{
  			color: white;
  			padding: 12px 20px;
  			font-size: 20px;
  			text-decoration: none;
  			display: block;
		}
		.dropdown-content a:hover {background-color: dimgray;}

		.dropdown:hover .dropdown-content 
		{
  			display: block;
		}
		.dropdown:hover .dropbtn 
		{
  			background-color: dimgray;
		}
	</style>
</head>
<body>
	
          <div class="container-fluid">
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span> MyMerit 
            	<div class="dropdown" style="float:right;">
            <?php
            	$g = $_SESSION['name'];
            	$jj="SELECT proCoor_name , proUser_name FROM program_coordinator WHERE proUser_name='$g'";
            	$vv=mysqli_query($link, $jj);

            	while($row = mysqli_fetch_array($vv))
            	{
  				echo"<button class='dropbtn'>".$row['proCoor_name']."</button>";
  				}
  			?>
  				<div class="dropdown-content">
  				 <a href="m1/programCoor_profile.php">Profile</a>
 				 <a href="m1/report_interface.php">Report</a>
  				<a href="userhome.php">Log Out</a>
 				 </div>
			</div>
            
          </div>

	</div>
	<br>
	<br>

	<table border="0" class="center">
	<tr>
		<td colspan="3"><img src="image/umplogo.png" alt="University Malaysia Pahang"></td>
	</tr>
	<tr>
		<td colspan="3">
			<button type="button" class="button button1" onclick="window.location.href='m1/programDetails.php'">Program Details Report</button>
		</td>
	</tr>
	<tr>
		<td colspan="3">
			<button type="button" class="button button4" onclick="window.location.href='m1/interface_reportlist.php'">Program In Pending List</button>
		</td>
	</tr>
	<tr>
		<td><button type="button" class="button button2" onclick="window.location.href='m1/confirmReport_list.php'">Program Approve Report List</button></td>
		<td><button type="button" class="button button2" onclick="window.location.href='m1/rejectReport_list.php'">Program Disaprove Report List</button></td>
		<td><button type="button" class="button button3" onclick="window.location.href='m2/QRcode.php'">Program QR code</button></td>
	</tr>
	<tr>
		<td colspan="3">
		<button type="button" class="button button4" onclick="window.location.href='m3/TrackingInterface.php'">Attendance Tracking System</button>
		</td>
	</tr>
	</table>
</body>
</html>