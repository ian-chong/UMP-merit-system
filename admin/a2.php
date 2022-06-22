<?php

session_start();
include('dbcontroller.php');
include('includes/checklogin.php');
check_login();


$id = $_GET['id'];
//$id = 'pro_id';
$query = "SELECT * FROM report_parmerit WHERE pro_id = {$id}";

$result = mysqli_query($conn,$query); 

$row = mysqli_fetch_assoc($result);


$program_name = $row["program_name"];
//print_r($program_name);
//exit();
$program_Association = $row["program_Association"];
$progarm_supervisor = $row["progarm_supervisor"];
$program_participle = $row["program_participle"];
$program_applicant = $row["program_applicant"];
$proAppli_phone= $row["proAppli_phone"];
$program_location = $row["program_location"];
$programS_date = $row["programS_date"];
$programE_date = $row["programE_date"];
$programS_time = $row["programS_time"];
$programE_time = $row["programE_time"];
$participle_merit = $row["participle_merit"];
$program_proof = $row["program_proof"];

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
							<div class="panel-heading">All Event Details</div>
							<div class="panel-body">
							  <div class="panel-body">
                                
                                 <div class="form-group">
							</div>
							</div>
							</div>
							
							
							
							
<form method="POST" action="a3.php">
<table class="center"> 

<h1 class="center">Edit Event</h1><br>

    <tr>
        <td>Event Name</td>
        <td><input type="text" name="program_name" value="<?php echo $program_name;?>"></td>
    </tr>
    <tr>
        <td>Event Association</td>
        <td><input type="text" name="program_Association" value="<?php echo $program_Association;?>"></td>
    </tr>
    <tr>
        <td>Event Supervisor</td>
        <td><input type="text" name="progarm_supervisor" value="<?php echo $progarm_supervisor ;?>"></td>
    </tr>
 
    <tr>
        <td>Program Participater</td>
        <td><input type="text" name="program_participle" value="<?php echo $program_participle;?>"></td>
    </tr>
    <tr>
        <td>Program Applicant</td>
        <td><input type="text" name="program_applicant" value="<?php echo $program_applicant;?>"></td>
    </tr>
	 <tr>
        <td>Prog Coord HP</td>
        <td><input type="" name="proAppli_phone" value="<?php echo $proAppli_phone;?>"></td>
    </tr>
	
	 <tr>
        <td>Event Location</td>
        <td><input type="text" name="program_location" value="<?php echo $program_location;?>"></td>
    </tr>
	
	<tr>
        <td>Event Start Date</td>
        <td><input type="text" name="programS_date" value="<?php echo $programS_date;?>"></td>
    </tr>
    <tr>
        <td>Event End Date</td>
        <td><input type="text" name="programE_date" value="<?php echo $programE_date ;?>"></td>
    </tr>
    <tr>
        <td>Event Start Time</td>
        <td><input type="text" name="programS_time" value="<?php echo $programS_time ;?>"></td>
    </tr>

    <tr>
        <td>Event End Time</td>
        <td><input type="text" name="programE_time" value="<?php echo $programE_time ;?>"></td>
    </tr>
  
	  <tr>
        <td>Number of Students</td>
        <td><input type="number" name="participle_merit" value="<?php echo $participle_merit ;?>"></td>
    </tr>
    <tr>
        <td>Commitee</td>
        <td><textarea name="program_proof"><?php echo $program_proof;?></textarea>
    </tr>
  
        <td >Status</td><td>
            <input type="radio" name="program_status" value="Approve" >Approve<br>
            <input type="radio" name="program_status" value="Disapprove" >Disapprove<br>
        </td>
    </tr>
	
	
    <td>
        <br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Edit" name="edit"> 
    <form action="a1.php">
    <input type="submit" value="Cancel"/>
    </form>
    </td>
    
</table>
</form>
    

</body>
</html>
