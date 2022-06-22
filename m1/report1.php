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


<?php

		$pro_month=$_POST['month'];
		$pro_sts="Approve";
		$check_month="SELECT * FROM report_parmerit WHERE program_status='$pro_sts' AND MONTH(programS_date)='$pro_month'";
		$result=mysqli_query($link, $check_month);


		if($pro_month=='1')
		{
			$month_name="January";
		}	
		else if($pro_month=='2')
		{
			$month_name="February";
		}
		else if($pro_month=='3')
		{
			$month_name="March";
		}
		else if($pro_month=='4')
		{
			$month_name="April";
		}
		else if($pro_month=='5')
		{
			$month_name="May";
		}
		else if($pro_month=='6')
		{
			$month_name="June";
		}
		else if($pro_month=='7')
		{
			$month_name="July";
		}
		else if($pro_month=='8')
		{
			$month_name="August";
		}
		else if($pro_month=='9')
		{
			$month_name="September";
		}
		else if($pro_month=='10')
		{
			$month_name="October";
		}
		else if($pro_month=='11')
		{
			$month_name="November";
		}
		else if($pro_month=='12')
		{
			$month_name="December";
		}				
?>
          		<br><br><br>
				<table border="1" align="center">
				<tr><td colspan="2"><img src="image/umplogo.png" alt="University Malaysia Pahang" style="width: 250px;height: 190px;"></td><td colspan="8" align="center"><label><h1>Program List In <?=$month_name?></h1></label>
				<h3>Table Below is the Program will be run in <?=$month_name?>. Student to be advice for more benefit to join program.</h3>
				<h3>Every Association wish to apply program please apply before one month of the program date.</h3></td></tr>

				<tr><td><label>Program Name</label></td>
				<td><label>Program Association</label></td>
				<td><label>Program Organise Location</label></td>
				<td><label>Program Start Date</label></td>
				<td><label>Program End Date</label></td>
				<td><label>Program Start Time</label></td>
				<td><label>Program End Time</label></td>
				<td><label>Program Participle Merit</label></td></tr>
<?php
			while ($row=mysqli_fetch_array($result))
			{	
					echo"<tr><td>".$row['program_name']."</td>
						<td>".$row['program_Association']."</td>
						<td>".$row['program_location']."</td>
						<td>".$row['programS_date']."</td>
						<td>".$row['programE_date']."</td>
						<td>".$row['programS_time']."</td>
						<td>".$row['programE_time']."</td>
						<td>".$row['participle_merit']."</td></tr>";
			}	
	?>
	</table>
	<center>
	<button type="button" onclick="window.location.href='report1_interface.php'" class="center">Back</button>
	</center>

</body>
</html>