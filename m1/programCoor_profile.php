<?php

require_once('databases.php');
session_start();

?>

<!DOCTYPE html>
<html>
<head>

<form method="POST">
<title>Program Coordinator profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
		.container-fluid
		{
			background-color:black;
			color: #FF8C00;
			font-size: 20px;
			width: 100%;
			height: 70px;
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
		.gk19
		{
			width: 200px;
			height: 200px;
		}
		.h2q
		{
			width: 200px;
			height: 200px;	
		}
		.mk14
		{
			width: 200px;
			height: 200px;		
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
  				 <a href="programCoor_profile.php">Profile</a>
 				 <a href="report_interface.php">Report</a>
  				<a href="../userhome.php">Log Out</a>
 				 </div>
			</div>
          </div>

	<?php
			$v = $_SESSION['name'];
		$profil="SELECT * FROM program_coordinator WHERE proUser_name='$v'";
		echo"<br><br><br>";
		echo"<table border='1' align='center'>";
		echo"<tr><td rowspan='7'>";
		$rs=mysqli_query($link,$profil);
		if($v=='H2Q')
		{
		echo"<img class='h2q' src='image/profile.jpg'></a>";
		}
		else if($v=='GK19')
		{
		echo"<img class= 'gk19'src='image/vector-sign-of-people-icon.jpg'></a>";
		}
		else if($v=='MK14')
		{
		echo"<img class='mk14' src='image/mck.jpg'></a>";
		}
		while($row=mysqli_fetch_array($rs))
		{	
	?>
	</tr></td>
	<tr><td colspan="3"><h1>Program Coordinator Profile</h1></td></tr>
	<tr><td><label>Name:</td><td><?=$row['proCoor_name']?></label></td></tr>
	<tr><td><label>Phone Number:</td><td><?=$row['proCoor_phone']?></label></td></tr>
	<tr><td><label>Email:</td><td><?=$row['proCoor_email']?></label></td></tr>
	<tr><td><label>Office Location:</td><td><?=$row['proCoor_office']?></label></td></tr>
	<tr><td><label>Office Phone Number:</td><td><?=$row['proCoor_office_no']?></label></td></tr>
	</table>

	<?php
	}
	?>		
			<center>
			<button type="button" onclick="window.location.href='update_proCoorProfile.php'" class="center">Update</button>
			<button type="button" onclick="window.location.href='../programCoor_interface.php'" class="center">Back</button>
			</center>

</form>		
</body>
</html>