<?php
include("databases.php");
if(isset($_POST['update'])){
	$no = $_POST['no'];
	$program_name = $_POST['program_name'];
	$program_Association = $_POST['program_Association'];
	$programS_date =  $_POST['programS_date'];
	$program_location =  $_POST['program_location'];
	$participle_merit =  $_POST['participle_merit'];


$update = "UPDATE report_parmerit SET program_name = '$program_name', program_Association = '$program_Association', program_location = '$program_location', programS_date = '$programS_date',participle_merit = '$participle_merit' WHERE pro_id = '$no'";
		
		if (mysqli_query($link, $update)) {
			$message = "The name had been update!";
     		echo "<script type='text/javascript'>alert('$message');
      						window.location = 'QRcode.php';</script>";
	} 
		else {
    		echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}
	}
?>
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
  text-align: left;
  background-color: #008CBA;
  color: white;
}
	</style>
</head>
<body>
	<div class="container-fluid">
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span> MyMerit 
            	<button onclick="LogOut()" class="logOut">Log Out</button>
            </h1><p >system</p>
        </div>
        <h2 align="center">Program List</h2>
        
<?php
$no = $_GET["no"];

$query = "SELECT * FROM report_parmerit WHERE pro_id = '$no'  ";
$result = mysqli_query($link,$query);
?>
<?php

	if (mysqli_num_rows($result) > 0){
	?>
	<?php
	
	foreach($result as $row) 
	{
		?>
	<form action="" method="post">
	<table id="table" align="center">
				<tr >
					<th>Program Name :</th>
					<td><input type="text" name="program_name" value="<?=$row['program_name']?>"></td>
				</tr>
				<tr>
					<th>Association Name :</th>
					<td><input type="text" name="program_Association" value="<?=$row['program_Association']?>"></td>
				</tr>
				<tr>
					<th>Program date :</th>
					<td><input type="text" name="programS_date" value="<?=$row['programS_date']?>"></td>
				</tr>
				<tr>
					<th>Program location :</th>
					<td><input type="text" name="program_location" value="<?=$row['program_location']?>"></td>
				</tr>
				<tr>
					<th>Program Merit :</th>
					<td><input type="text" name="participle_merit" value="<?=$row['participle_merit']?>"></td>
				</tr>
				
		</table>
		<input type="hidden" name="no" value ="<?=$row['pro_id']?>">
		<table align="center">
		<td><input type="reset" value="Reset"></td>
		<td><input type="submit" name="update" Value="update"></td>
	</table>
	</form>

		
        <?php
			
	}}
	?>
</body>
</html>
