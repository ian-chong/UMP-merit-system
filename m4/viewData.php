<?php
	session_start();
	$userid=$_SESSION["login_user"];
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
	<title>View Merit Table</title>
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
		.col-header
		{
			float: auto;
			text-align: left;
			margin-top: 100px;
			margin-left: 150px;
		}
		.col-caption
		{
			float: auto;
			text-align: left;
			margin-top: 30px;
			margin-left: 150px;
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
	</script>
	<!-- Banner Starts -->
    <div class="container-fluid">
        <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span> MyMerit
            <button onclick="document.location='home_interface.html'" class="logOut">Log Out</button>
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
			<h1>Merit Table</h1>
		</div>
	<?php
		$con= mysqli_connect("localhost","root","") or die(mysql_error()); //Create and check connection
		mysqli_select_db($con,"mymerit") or die (mysqli_error());
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
			<div class="col-header">
				<h2>Table of Student with Highest Merit:</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-25"></div>
			<div class="col-list">
				<table class="table table-bordered">
					<thead>
					  <tr>
						<th>No</th>
						<th class = "cell-1">Name</th>
						<th class = "cell-2">Faculty</th>
						<th class = "cell-3">Total Merit</th>
					  </tr>
					</thead>
					<?php
					echo "<tbody disabled>"; //List printed based on the database
				    $sql="SELECT std_name, std_faculty, std_totalMerit FROM student ORDER BY std_totalMerit DESC";
				    $result=mysqli_query($con,$sql);
					$counter=1;
					if(mysqli_num_rows($result)>0){
						while ($row=mysqli_fetch_array($result)) {
							echo "<tr> \n";
							echo "<td>".$counter."</td>";
							echo "<td>".$row['std_name']."</td>";	//Retrive Student Name from database
							echo "<td>".$row['std_faculty']."</td>";	//Retrive Student Faculty from database
							echo "<td align = 'right'>".$row['std_totalMerit']."</td>";		//Retrieve Student Total Merit from database
							$counter++;
							echo "</tr>";
						}
					}
					?>
				</table>
			</div>
			<div></div>
			<div class="row">
				<div class="col-header">
					<h2>Table of Program with Highest Eligible Merit:</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-25"></div>
				<div class="col-list">
					<table class="table table-bordered">
						<thead>
						  <tr>
							<th>No</th>
							<th class = "cell-1">Program Name</th>
							<th class = "cell-2">Program Organizer</th>
							<th class = "cell-3">Participant Merit</th>
						  </tr>
						</thead>	
						<?php
						echo "<tbody disabled>"; //List printed based on the database
						$sql="SELECT program_name, program_Association, participle_merit FROM report_parmerit ORDER BY participle_merit DESC";
						$result=mysqli_query($con,$sql);
						$counter=1;
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								echo "<tr> \n";
								echo "<td>".$counter."</td>";
								echo "<td>".$row['program_name']."</td>";	//Retrive Program Name from database
								echo "<td>".$row['program_Association']."</td>";	//Retrive Program Organizar from database
								echo "<td align = 'right'>".$row['participle_merit']."</td>";		//Retrieve Program Eligible Merit from database
								$counter++;
								echo "</tr>";
							}
						}
						?>
					</table>
			</div>
				<br><br>
			<div class="row">
				<div class="col-caption">
					For further assistance, please contact JHEPA by 09-5492545 (Gambang Campus) or 09-4245700 (Pekan Campus).
				</div>
			</div>
			</div>
			<table>
					<tr>
						<th class = "cell-1"><th class = "cell-1"><th class = "cell-1">
						<th class = "cell-3"><button class = "btn btn-default btn-lg float right" onclick = "back()">Back</button></th>
					</tr>
				</table>
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