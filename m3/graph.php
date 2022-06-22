<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		
		header.h2
		{
			text-align: center;
		    margin-left:auto;
			margin-right:auto;
		}
		
		
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
		.button1
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

		.button1:hover{opacity: 1}
		{
			background-color: white;
			color: black;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.button2
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

		.button2:hover{opacity: 1}
		{
			background-color: white;
			color: black;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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

		.button3:hover{opacity: 1}
		{
			background-color: white;
			color: black;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.button4
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

		.button4:hover{opacity: 1}
		{
			background-color: white;
			color: black;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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
		.word1
		{
			color: black;
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
            <button onclick="document.location='home_interface.html'" class="logOut">Log Out</button>
            </h1>
    </div>

<?php
$connect=mysqli_connect("localhost","root","","Mymerit");
$query = "SELECT date,count(*)as number FROM participant GROUP BY date";
$result = mysqli_query($connect,$query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Attendance Report of Students based on Date </title>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
					['date','Number'],
					<?php
					while($row = mysqli_fetch_array($result))
					{
						echo "['".$row["date"]."',".$row["number"]."],";
					}
					?>
				]);
        var options = {
          title: 'Date Attendance Report of Students'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
			
		</script>

	</head>
	<body>
		<br /><br />
		<div style="width:900px;">
		<h3 align="center"><b>Attendance Date Report</b></h3>
		<br/>
		<div id="piechart" style="width: 900px; height: 500px;" align="center"></div>
	</div>
	</body>
 
  <button onclick="location.href='TrackingInterface.php'">back</button>
</html>