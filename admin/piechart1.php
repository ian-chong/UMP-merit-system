<?php

session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


$connect=mysqli_connect("localhost","root","","mymerit");
$query = "SELECT program_Association,count(*)as number FROM report_parmerit GROUP BY  program_Association";
$result = mysqli_query($connect,$query);
?>


<!DOCTYPE html>
<html>
	<head>
    <title>The location </title>
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
		.button3
		{
			background-color: #008CBA;
			border:blue;
			color: white;
			padding: 32px 16px;
			text-align: center;
			border-radius: 12px;
			display:inline-block;
			font-size: 32px;
			margin: 4px 2px;
			cursor: pointer;
			opacity: 0.6;
			transition: 0.3s;
			width: 100%
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
						<h2 class="page-title">Data of event</h2>
						<div class="panel panel-default">
							<div class="panel-heading">Data of Events</div>
							<div class="panel-body">

		
	<tr>
		<td><button type="button" class="button button3" onclick="window.location.href='pie1.php'">Statistic of which CLUBS are most active in UMP</button></td>
		<td><button type="button" class="button button3" onclick="window.location.href='pie2.php'"> Statistic of the HIGHEST MERIT provided order by Semester</button></td>
	</tr>

		
	</head>
	
	</body>
</html>