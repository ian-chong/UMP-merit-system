<?php
	require_once ('databases.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script >$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
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
        <table>
			<h2 align="center">Program Reject List</h2>
			<table id="table_id" align="center" border="1">
				<thead>
				<tr style="border-bottom: 1px solid black;height: 20%">
					<td align="center" style="width: 10%">No.</td>
					<td align="center" style="width: 50%">Program Name</td>
					<td align="center">Start Date</td>
					<td align="center">End Date</td>
					<td align="center">Action</td>
				</tr>
				</thead>
				<br><br>  
		<tbody>
        <?php
        $i=1;
        $x= "Disapprove";
        $list_1= "SELECT * FROM report_parmerit WHERE program_status ='$x'";
        $post=mysqli_query($link, $list_1);
        if(mysqli_num_rows($post) > 0)
        {
        	while ($row=mysqli_fetch_array($post)) 
        	{	
        		if(!$row['program_status'])
        		{
        			$message='"No Reject Program"';
					echo "<script type='text/javascript'>alert('$message');
           					window.location = 'programCoor_interface.php?program_status!=$x';</script>";
        		}
        		else
        		{
        		echo"<tr>
        			 <td align='center'>".$i."</td>
        			 <td align='center'>".$row['program_name']."</td>
        			 <td align='center'>".$row['programS_date']."</td>
        			 <td align='center'>".$row['programE_date']."</td>
        		";
        		}
		?>		
			<td align="center"><a href ="viewReject_ReportList.php?no=<?=$row['program_name']?>">View</a>
			<a href ="deleteReportList.php?qq=<?=$row['program_name']?>">Delete</a></td>


			<?php
			echo"</tr>";
				$i++;
			}
		}
		else
		{
			echo "<tr><td colspan='5' align='center'>No Reject Program</td></tr>";
		}
			?>

			</table>
		</tbody>
			<center>
			<button type="button" onclick="window.location.href='../programCoor_interface.php'" class="center">Back</button>
			</center>
</body>
</html>