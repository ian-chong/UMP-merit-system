<?php

session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


$connect=mysqli_connect("localhost","root","","mymerit");
$query = "SELECT participle_merit,count(*)as number FROM report_parmerit GROUP BY  participle_merit";
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

	<br /><br />
		<div style="width:900px;">
		<h3 align="center">Merits of the Events</h3>
		<br/>
		<div id="piechart" style="width: 900px; height: 500px;"></div>
	</div>
	
	
		
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
	
	google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
					['participle_merit','Number'],
					<?php
					while($row = mysqli_fetch_array($result))
					{
						echo "['".$row["participle_merit"]."',".$row["number"]."],";
					}
					?>
				]);
        var options = {
          title: 'Highest Merit'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
			
		</script>
		
	</head>
	
	</body>
</html>