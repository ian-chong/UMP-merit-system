<?php
	require_once ('databases.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script >$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

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
  				<a href="">Log Out</a>
 				 </div>
			</div>
            </h1><p >system</p>
          </div>
      
	<?php
include("databases.php");

$query = "SELECT * FROM report_parmerit";
$result = mysqli_query($link,$query);
?>
<?php
	if (mysqli_num_rows($result) > 0){
	?>
			<table id="table_id" align="center" border="1">
				<div class="table">
				<thead>
				<tr>
					<th>No.</th>
					<th>Program Name</th>
					<th >Date</th>
					<th>Generate QR Code</th>
					<th>view</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				</thead>
			</div>
	<tbody>
	<?php
	$i=1;
	foreach($result as $row) 
	{

		echo "<tr>"
			 . "<td>".$i."</td>"
             . "<td>".$row['program_name']."</td>"
             . "<td>".$row['programS_date']."</td>";
       		 ?>
			<td align="center"><a href ="attendance.php?no=<?=$row['pro_id']?>">Generate </a></td>
			<td align="center"><a href ="viewqr.php?no=<?=$row['pro_id']?>">view </a></td>
			<td align="center"><a href ="editqr.php?no=<?=$row['pro_id']?>">Edit </a></td>
			<td align="center"><a href ="deleteqr.php?no=<?=$row['pro_id']?>">Delete </a></td>

        <?php
			echo "</tr>";
             $i++;
	}
	?></tbody>
	<?php
} else {
    echo "0 results";

}
?>

 </table>
 <button onclick="location.href='chartqr.php'">View report</button>
 <button type="button" onclick="window.location.href='../programCoor_interface.php'" class="center">Back</button>
</body>
</html>