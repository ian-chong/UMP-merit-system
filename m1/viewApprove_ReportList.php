<?php
require_once('databases.php');
session_start();

?>

<!DOCTYPE html>
<html>
<head>
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
	<title></title>
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
  				 <a href="programCoor_profile.php">Profile</a>
 				 <a href="report_interface.php">Report</a>
  				<a href="userhome.php">Log Out</a>
 				 </div>
			</div>
            
          </div>

		<table border="1" align="center">
	<?php

		if(isset($_GET['no']))
	{
		$no = $_GET["no"];
		$status = "Approve";
		$show1 = "SELECT * FROM report_parmerit WHERE program_name = '$no' ANd program_status ='$status'";
		$S1 = mysqli_query($link,$show1);
		if(mysqli_num_rows($S1)>0)
		{
			while($row = mysqli_fetch_assoc($S1))
			{
echo
			"<br><br>
			<tr><td colspan='2'><label>Program Name:</td><td colspan='3'>".$row["program_name"]."</label></td></tr>
			<tr><td colspan='2'><label>Program Association:</td><td colspan='3'>".$row["program_Association"]."</label></td></tr
			<tr><td colspan='2'><label>Program Supervisor:</td><td colspan='3'>".$row["progarm_supervisor"]."</label></td></tr>
			<tr><td colspan='2'><label>Program Expected Participants:</td><td colspan='3'>".$row["program_participle"]."</label></td></tr>
			<tr><td colspan='2'><label>Program Applicant Name:</td><td colspan='3'>".$row["program_applicant"]."</label></td></tr>
			<tr><td colspan='2'><label>Program Applicant Phone Number:</td><td colspan='3'>".$row["proAppli_phone"]."</label></td></tr>
			<tr><td colspan='2'><label>Program Location:</td><td colspan='3'>".$row["program_location"]."</label></td></tr>
			<tr><td colspan='2'><label>Program Start Date:</td><td colspan='3'>".$row["programS_date"]."</label></td></tr>
			<tr><td colspan='2'><label>Program End Date:</td><td colspan='3'>".$row["programE_date"]."</label></td></tr>
			<tr><td colspan='2'><label>Program Start Time:</td><td colspan='3'>".$row["programS_time"]."</label></td></tr>
			<tr><td colspan='2'><label>Program End Time:</td><td colspan='3'>".$row["programE_time"]."</label></td></tr>
			<td colspan='2'><label>Participle Merit:</td><td colspan='3'>". $row["participle_merit"]."</label></td></tr>
			<tr><td colspan='2'><label>Proof Of Program:</td><td colspan='3'>".$row["program_proof"]."</label>";
			echo'<a href="downloadDocument.php?no=<?=$row["program_name"]?>Download</a></td></tr>';
			}
		}
	?>
					 <tr><td colspan="5" align="center"><h4>Committee Member</h4></td></tr>
					 <tr><td><label>Student ID:</label></td>
					 <td><label>Student Name:</label></td>
					 <td><label>Student Phone Number:</label></td>
					 <td><label>Student Position:</label></td>
					 <td><label>Committeen Merit:</label></td></tr>

<?php
			$show2 = "SELECT * FROM comm_detail WHERE program_name = '$no'";
			$S2 = mysqli_query($link,$show2);

				if(mysqli_num_rows($S2) > 0)
				{
					while($row = mysqli_fetch_assoc($S2))
					{
						if($row["std_position"] == "program_chair" )
						{
							$comm_position = "Program Chair";
						}
						else if($row["std_position"] == "program_cochair")
						{
							$comm_position = "Program Co-Chair";
						}
						else if($row["std_position"] == "main_committee")
						{
							$comm_position = "Main Committee";
						}
						else if($row["std_position"] == "sub_committee")
						{
							$comm_position = "Sub Committee";
						}
					
					echo "<tr><td>".$row["std_id"]."</td>
							<td>".$row["std_name"]."</td>
							<td>".$row["std_phone"]."</td>
							<td>".$comm_position."</td>
							<td>".$row["comm_merit"]."</td></tr>";
					}	
				}		
		}

		?>

</table>		
		<center>
		<button type="button" onclick="window.location.href='confirmReport_list.php'" class="left">Back</button>
		</center>
</body>
</html>