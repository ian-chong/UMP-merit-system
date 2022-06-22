<?php
	session_start();
	$userid=$_SESSION['login_user'];
	ini_set('display_errors', '0');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Merit Report</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
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
		img
		{
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 30%;
		}
		.word1
		{
			color: white;
			padding: 50px 24px;
			text-align: center;
			border-radius: 12px;
			display:inline-block;
			font-size: 40px;
			margin: 4px 2px;
			cursor: pointer;
			opacity: 0.6;
			width: 100%
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
		.boxed 
		{
			border: 5px solid blue ;
			margin-left: auto;
			margin-right: auto;
			width: 90%;
			background-color: #008CBA;
			opacity: 80%;
			color: white;
		}
		.col-25 
		{
			float: auto;
			width: 25%;
			text-align: right;
			margin-top: 6px;
		}

		.col-75 {
			float: auto;
			margin-top: 6px;
			margin-left: 20px;
		}
		.col-list {
			float: auto;
			margin-top: 40px;
			margin-left: 20px;
		}
		table.table-bordered
		{
			background-color: white;
			opacity: 80%;
			color: #008CBA;
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
		}
	</style>
</head>

<body>

	<script>
		function back() {
		  window.history.back();
		}
		function certificate() {
		   window.open('certificate.php', '_blank');
		}
	</script>
	<!-- Banner Starts -->
    <div class="container-fluid">
        <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span> MyMerit
            <button onclick="location.href='userhome.php'" class="logOut">Log Out</button>
        </h1>
    </div>
	<!-- Banner Ends -->
	<br>
	<br>
	<table border="0" class="center">
	<tr>
		<td colspan="2"><img src="image/umplogo.png" alt="University Malaysia Pahang"></td>
	</tr>
	</table>
	<br /><br />
	<!-- Report Starts -->
	<div class="boxed">
		<div class="container">
			<h1>Merit Report</h1>
		</div>
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
		<div class="row">
			<div class="col-25"></div>
			<div class="col-list">
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
				    $sql="SELECT comm_detail.program_name, comm_detail.std_position FROM comm_detail INNER JOIN attendance ON comm_detail.std_name=attendance.C_name WHERE comm_detail.std_id='$userid' AND comm_detail.pro_id=attendance.pro_id";
				    $result=mysqli_query($con,$sql);
					$totalMerit=0;
					$counter=1;
					if(mysqli_num_rows($result)>0){
						while ($row=mysqli_fetch_array($result)) {
							echo "<tr> \n";
							echo "<td>".$counter."</td>";
							echo "<td>".$row['program_name']."</td>";	//Retrive Program Name from database
							echo "<td>".$row['std_position']."</td>";	//Retrive Program Position from database
							switch ($row['std_position']){ //Define the merit designation for the program participation
								case "program_chair":
								$merit=500;
								echo "<td align = 'right'>".$merit."</td>";
								break;
								case "program_cochair":
								$merit=450;
								echo "<td align = 'right'>".$merit."</td>";
								break;
								case "main_committee":
								$merit=300;
								echo "<td align = 'right'>".$merit."</td>";
								break;
								case "sub_committee":
								$merit=200;
								echo "<td align = 'right'>".$merit."</td>";
								break;
								default:
								$merit=0;
								echo "<td align = 'right'>".$merit."</td>";
							}
							$totalMerit += $merit; //Calculate the total merit
							$counter++;
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
							echo "<td>Participant</td>";	//Retrive Program Position from database
							$totalMerit += $row['participle_merit'];
							echo "<td align = 'right'>".$row['participle_merit']."</td>";
							$counterAlt++;
							echo "</tr>";
						}
					}
					
					// Query to set the eligible merit based on program position to the server database
					$sql = "UPDATE comm_detail SET comm_merit='500' WHERE std_position='program_chair' && std_id='$userid'";
					$result = mysqli_query($con, $sql);
					$sql = "UPDATE comm_detail SET comm_merit='450' WHERE std_position='program_cochair' && std_id='$userid'";
					$result = mysqli_query($con, $sql);
					$sql = "UPDATE comm_detail SET comm_merit='300' WHERE std_position='Main_committee' && std_id='$userid'";
					$result = mysqli_query($con, $sql);
					$sql = "UPDATE comm_detail SET comm_merit='200' WHERE std_position='sub_committee' && std_id='$userid'";
					$result = mysqli_query($con, $sql);
					echo "<tr> \n";echo "<th></th>";echo "<th></th>";
					echo "<th>Total Merit:</th>";
					echo "<td align = 'right'><strong>".$totalMerit."</strong></td>";
					// Query to set the total merit for the user (User claiming the merit)
					$sql = "UPDATE student SET std_totalMerit='$totalMerit' WHERE std_id='$userid'";
					$result = mysqli_query($con, $sql);
					echo "</tbody>";
					
					?>
				</table>
					<tr><strong>For further assistance, please contact JHEPA by 09-5492545 (Gambang Campus) or 09-4245700 (Pekan Campus).</strong></tr>
				<br><br>
				<table>
					<tr>
						<th class = "cell-1">
						<th class = "cell-2"><button class = "btn btn-default btn-lg float right" onclick = "location.href='viewData.php'">View Data</button></th>
						<th class = "cell-2"><button class = "btn btn-default btn-lg float right" onclick = "certificate()">Print Certificate</button></th>
						<th class = "cell-3"><button class = "btn btn-default btn-lg float right" onclick = "javascript:history.go(-1)">Back</button></th>
					</tr>
				</table>
			</div>	
		</div>
	<br /><br /></div>
	<!-- Report Ends -->
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>

</html>