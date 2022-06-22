<?php
require_once('databases.php');
session_start();
if(isset($_POST['Check']))
{
$yr=$_POST["year"];
$sts='Approve';
$total1=0;
$total2=0;
$total3=0;
$total4=0;
$total5=0;
$total6=0;
$total7=0;
$total8=0;
$total9=0;
$total10=0;
$total11=0;
$total12=0;
$result="SELECT count(pro_id) as i, MONTH(programS_date) as month  from report_parmerit where program_status='$sts' and YEAR(programS_date)='$yr' group by month";
$rr=mysqli_query($link, $result);
while($row=mysqli_fetch_array($rr))
{
	for ($x=0; $x<$row['i'] ; $x++) 
	{ 
		if($row['month']=="1")
		{
			
			$total1++;
		}
		else if($row['month']=="2")
		{
			
			$total2++;
		}
		else if($row['month']=="3")
		{
			
			$total3++;
		}
		else if($row['month']=="4")
		{
			
			$total4++;
		}
		else if($row['month']=='5')
		{
			
			$total5++;
		}
		else if($row['month']=='6')
		{
			
			$total6++;
		}
		else if($row['month']=='7')
		{
			
			$total7++;
		}
		else if($row['month']=='8')
		{
			
			$total8++;
		}
		else if($row['month']=='9')
		{
			
			$total9++;
		}
		else if($row['month']=='10')
		{
			
			$total10++;
		}
		else if($row['month']=='11')
		{
			
			$total11++;
		}
		else if($row['month']=='12')
		{
			
			$total12++;
		}
	}	
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    	  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/figure.css" rel="stylesheet">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<title></title>
		
	<script type="text/javascript">
	google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
	function drawChart()
	 {
      var data = google.visualization.arrayToDataTable([
        ["Month", "total number", { role: "style" } ],
        ["January", <?php echo $total1?>, "Chocolate"],
        ["February", <?php echo $total2?>, "silver"],
        ["March",<?php echo $total3?>, "gold"],
        ["April", <?php echo $total4?>, "red"],
        ["May", <?php echo $total5?>, "blue"],
        ["June", <?php echo $total6?>, "green"],
        ["July", <?php echo $total7?>, "purple"],
		["August", <?php echo $total8?>, "orange"],
        ["September", <?php echo $total9?>, "Crimson"],
        ["October", <?php echo $total10?>, "pink"],
        ["November", <?php echo $total11?>, "lavender"],
        ["December", <?php echo $total12?>, "color: BlueViolet"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,{ calc: "stringify",sourceColumn: 1,type: "string", role: "annotation" },2]);

      var options =
       {title: "Total number of program organize in every month <?php echo $yr?>",width: 600,height: 400,bar: {groupWidth: "95%"},legend: { position: "none" }};
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
 	 }

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart1);
 	    function drawChart1() {
        var data = google.visualization.arrayToDataTable([
        ["Month", "total number", { role: "style" } ],
        ["January", <?php echo $total1?>, "Chocolate"],
        ["February", <?php echo $total2?>, "silver"],
        ["March",<?php echo $total3?>, "gold"],
        ["April", <?php echo $total4?>, "red"],
        ["May", <?php echo $total5?>, "blue"],
        ["June", <?php echo $total6?>, "green"],
        ["July", <?php echo $total7?>, "purple"],
		["August", <?php echo $total8?>, "orange"],
        ["September", <?php echo $total9?>, "Crimson"],
        ["October", <?php echo $total10?>, "pink"],
        ["November", <?php echo $total11?>, "lavender"],
        ["December", <?php echo $total12?>, "color: BlueViolet"]
        ]);

        var options = {
          title: 'Percentage Of Program Organize in every month <?php echo $yr?>',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
		</script>	
		<?php } ?>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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
<form method="POST" action="report2.php">

            
          </div>
<table align="center">
<tr><td><label>Select Year To Check Total Number Of Program:</td><td><input type="text" name="year" value="year"></label></td></tr>
</table>
<center><button type="Submit" name="Check" value="Check">Check </button>
		<button type="button" onclick="window.location.href='../programCoor_interface.php'" class="center">Back</button>
</center>
</form>
<table border="0" align="center">
<tr><td align="center"><div id="barchart_values" style="width: 900px; height: 500px;"></div>
<div id="piechart_3d" style="width: 700px; height: 400px;"></div></td></tr>
</table>
</body>
</html>