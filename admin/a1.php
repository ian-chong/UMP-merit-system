<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	
	<meta charset="UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Request Program</title>
	
	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	
	
</head>

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
</style>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Request List</h2>
						<div class="panel panel-default">
							<div class="panel-heading">Event Request</div>
							<div class="panel-body">
							<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Event Name</th>
											<th>Event Association</th>
											<th>Event"s Participle</th>
											<th>No of Student  </th>
											<th>No of Applicant </th>
											<th>Prog Coordinator HP </th>
											<th>Venue  </th>
											<th>Program Start Date  </th>
											<th>Program End Date   </th>
											<th>Program Start time </th>
											<th>Program End time  </th>
											<th>Merit </th>
											<th>Program Proof </th>
											<th>Status</th>
											<th>Request</th>
										</tr>
									</thead>
							

							
							
<?php
include("dbcontroller.php");

$query = "SELECT * FROM report_parmerit ORDER By program_status";
$result = mysqli_query($conn,$query);


if (mysqli_num_rows($result) > 0){
//output data of each row
while($row = mysqli_fetch_assoc($result)){

$program_name = $row["program_name"];
$program_Association = $row["program_Association"];
$progarm_supervisor = $row["progarm_supervisor"];
$program_participle = $row["program_participle"];
$program_applicant = $row["program_applicant"];
$proAppli_phone = $row["proAppli_phone"];
$program_location = $row["program_location"];
$programS_date = $row["programS_date"];
$programE_date = $row["programE_date"];
$programS_time = $row["programS_time"];
$programE_time = $row["programE_time"];
$participle_merit = $row["participle_merit"];
$program_proof = $row["program_proof"];
$program_status = $row["program_status"];
$id = $row["pro_id"];

?>
<tbody>

<td><?php echo "$program_name"; ?></td>
<td><?php echo "$program_Association";?></td>
<td><?php echo "$progarm_supervisor";?></td>
<td><?php echo "$program_participle";?></td>
<td><?php echo "$program_applicant";?></td>
<td><?php echo "$proAppli_phone";?></td>
<td><?php echo "$program_location ";?></td>
<td><?php echo "$programS_date";?></td>
<td><?php echo "$programE_date";?></td>
<td><?php echo "$programS_time";?></td>
<td><?php echo "$programE_time";?></td>
<td><?php echo "$participle_merit";?></td>
<td><?php echo "$program_proof";?></td>
<td><?php echo "$program_status";?></td>

<td><a href="a2.php?id=<?=$row['pro_id']?>">Edit event</a> </td>

<?php 
}
}
else
echo "No current Event";
?>

</table>

</body>
</html>