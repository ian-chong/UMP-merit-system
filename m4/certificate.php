<?php
	session_start();
	$userid=$_SESSION['login_user'];
	ini_set('display_errors', '0');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Merit Certificate</title>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		.center 
		{
			border: 5px solid blue ;
			margin: auto;
			width: 1240px;
			height: 1754px;
			background-color: white;
			opacity: 100%;
			padding: 10px;
		}
		.col-25 
		{
			float: auto;
			width: 25%;
			text-align: right;
			margin-top: 6px;
			font-size: 200%;
		}
		.col-title 
		{
			float: auto;
			text-align: left;
			margin-top: 6px;
			font-size: 500%;
			position: relative;
			left: 50px;
		}
		.col-75 {
			float: auto;
			margin-top: 6px;
			margin-left: 20px;
			font-size: 200%;
		}
		.cell-1
		{
			columns: 400px;
		}
		.cell-2
		{
			columns: 200px;
		}
		.cell-3
		{
			columns: 150px;
			text-align: right;
		}
	</style>
</head>

<body>
	</table>
	<br /><br />
	<div class="center">
		<img  width=200 height=100 src="image/umplogo.png" alt="University Malaysia Pahang">
		<br /><br />
		<div>
			<h1 class="col-title" >Merit Certificate</h1>
		</div><br /><br /><br /><br />
		<?php
			$con= mysqli_connect("localhost","root","") or die(mysql_error()); //Create and check connection
			mysqli_select_db($con,"Mymerit") or die (mysqli_error());
			
			$displayTable = mysqli_query($con,"SELECT std_name FROM student WHERE std_id='$userid'"); //Retrieving user name from database
			$displayName = mysqli_fetch_row($displayTable);
			echo "<div class='row'>";
				echo "<div class='col-25'>";
					echo "<label>Name:</label>";
				echo "</div>";
				echo "<div class='col-75'>";
					echo $displayName[0];
				echo "</div>";
			echo "</div>";

			echo "<div class='row'>";
				echo "<div class='col-25'>";
					echo "<label>Student ID:</label>";
				echo "</div>";
				echo "<div class='col-75'>";
					echo $userid;
				echo "</div>";
			echo "</div>";
		?>
		<div class="row">
			<div class="col-25">
				<label for="realDate">Date:</label>
			</div>
			<div class="col-75">
				<?php
				date_default_timezone_set("Asia/Kuala_Lumpur"); //Retrieving real date based on local timezone
				echo date("d/m/Y");
				?>
			</div>
		</div>
		<br /><br /><br /><br />
		<table class="table table-bordered">
					<thead>
					  <tr>
						<th>No</th>
						<th class = "cell-1">Program</th>
						<th class = "cell-2">Merit Position</th>
						<th class = "cell-3">Merit Designation</th>
					  </tr>
					</thead>
					<?php
					echo "<tbody disabled>"; //List printed based on the database
					$sql="SELECT comm_detail.program_name, comm_detail.std_position, comm_detail.comm_merit FROM comm_detail INNER JOIN attendance ON comm_detail.std_name=attendance.C_name WHERE comm_detail.std_id='$userid' AND comm_detail.pro_id=attendance.pro_id";
				    $result=mysqli_query($con,$sql);
					$totalMerit=0;
					$counter=1;
					if(mysqli_num_rows($result)>0){
						while ($row=mysqli_fetch_array($result)) {
							echo "<tr> \n";
							echo "<td>".$counter."</td>";
							echo "<td>".$row['program_name']."</td>";	//Retrive Program Name from database
							echo "<td>".$row['std_position']."</td>";	//Retrive Program Position from database
							echo "<td align = 'right'>".$row['comm_merit']."</td>";	//Define the merit designation for the program participation
							echo "</tr>";
						}
					}
					$sql="SELECT report_parmerit.program_name, report_parmerit.participle_merit FROM report_parmerit INNER JOIN participant ON report_parmerit.pro_id=participant.pro_id WHERE participant.std_id='$userid'";
				    $result=mysqli_query($con,$sql);
					$counterAlt=1;
					if(mysqli_num_rows($result)>0){
						while ($row=mysqli_fetch_array($result)) {
							echo "<tr> \n";
							echo "<td>".$counter."</td>";
							echo "<td>".$row['program_name']."</td>";	//Retrive Program Name from database
							echo "<td>participant</td>";	//Retrive Program Position from database
							$totalMerit += $row['participle_merit'];
							echo "<td align='right'>".$row['participle_merit']."</td>";
							$counterAlt++;
							echo "</tr>";
						}
					}
					
					$displayTable = mysqli_query($con,"SELECT std_totalMerit FROM student WHERE std_id='$userid'"); //Retrieving user name from database
					$displayMerit = mysqli_fetch_row($displayTable);
					echo "<tr> \n";
					echo "<th></th>";
					echo "<th></th>";
					echo "<th>Total Merit:</th>";
					echo "<td align = 'right'><strong>".$displayMerit[0]."</strong></td>";
					echo "</tbody>";
					
					mysqli_close($con); //Close connection
					?>
		</table>
	</div>
	</table>
</body>

</html>