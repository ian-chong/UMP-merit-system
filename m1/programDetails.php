<?php

require ('databases.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<form id="Program_apply" method="POST" enctype="multipart/form-data">
	<title>Program Detail Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/figure.css" rel="stylesheet">
<style type="text/css">
		body
		{
			background-image:url(image/b1.jpg);
			background-size:cover;
			background-attachment:fixed;
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
			height: 70px;
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
		.table_title
		{
			text-align: center;
		}
		.left
		{
			align : left;
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
          </div>
          	<h1 class="table_title">Program Detail Report</h1>
<table border="1" class="center">
<tr><td colspan="2"><label for="Program Name">Program Name:</td><td colspan="2"><input type="text" name="program_name"></label></td></tr>

<tr><td colspan="2"><label for="Program Association">Program Association:</td><td colspan="2"><input type="text" name="program_association" ></label></td></tr>

<tr><td colspan="2"><label for="Progarm Supervisor">Progarm Supervisor:</td><td colspan="2"><input type="text" name="program_supervisor" ></label></td></tr>

<tr><td colspan="2"><label for="Program Expected Participle">Program Expected Participants:</td><td colspan="2"><input type="number" name="participle_number" ></label></td></tr>

<tr><td colspan="2"><label for="Program Applicant">Program Applicant:</td><td colspan="2"><input type="text" name="applicant_name" ></label></td></tr>

<tr><td colspan="2"><label for="Program Applicant Phone Number">Program Applicant Phone Number:</td><td colspan="2"><input type="text" name="applicant_phone" ></label></td></tr>

<tr><td colspan="2"><label for="Program Location">Program Location:</td><td colspan="2"><input type="text" name="program_location" ></label></td></tr>

<tr><td><label for="Program Start Date">Program Start Date:</td><td><input type="date" name="programS_date" ></label></td>
					<td><label for="Program End Date">Program End Date:</td><td><input type="date" name="programE_date" ></label></td></tr>

<tr><td><label for="Program Start Time">Program Start Time:</td><td><input type="text" name="programS_time"></label></td>
			<td><label for="Program End Time">Program End Time:</td><td><input type="text" name="programE_time" ></label></td></tr>



<tr><td colspan="4"><h1 class="table_title"><b>Program Merit</b></h1></td></tr>
<tr><td colspan="2"><label for="Participle Merit">Participle Merit:</td><td colspan="2"><input type="text" name="participle_merit" ></label></td></tr>

<tr><td colspan="2"><label>Number of Committee:</td><td colspan="2"><input type="text" name="committee_num"></label></td></tr>
    				<tr><td colspan="4"><label>Proof to conduct Program</label></td></tr>
    				<tr><td colspan="4"><input type="file" name="proof" size="1000000000" required></td></tr>
<tr><td colspan="4"><h1 class="table_title"><b>Committee Info</b></h1></td></tr>
					<tr><td colspan="4">
					<div class="field">
                    <div class="user">
                    	<input type="text" name="student_id[]" id="student_id" placeholder="Student ID" required>              
                   		<input type="text" name="student_name[]" id="student_name" placeholder="Full name" required >
                    	<input type="number" name="student_phone[]" id="std_phone" placeholder="Phone Number" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required >
                    		<select name="student_position[]">
                       			 <option value="program_chair">Program Chair</option>
                       			 <option value="program_cochair" >Program co-Chair</option>
                        		 <option value="main_committee">Main committee</option>
                       			 <option value="sub_committee">Sub committee</option>
                   				 </select>
                    </div>
                    </div>
                    <div class="add" align="left"><img src="image/add_icon.png" width="25px" height="25px"></div></td></tr>

                    <tr><td colspan="4"><input type="Submit" name="Submit" value="Submit">

                    				<button type="button" onclick="window.location.href='../programCoor_interface.php'" class="left">Back</button></td>


<?php	
if (isset($_POST['Submit'])) 
{
	$proof = $_FILES['proof']['name'];
    $folder = 'proof/';
    $file = $folder.basename($_FILES['proof']['name']);
    move_uploaded_file($_FILES['proof']['tmp_name'], $folder.$proof);

	$pro_name=$_POST['program_name'];
	$pro_association=$_POST['program_association'];
	$pro_supervisor=$_POST['program_supervisor'];
	$pro_particpleNum=$_POST['participle_number'];
	$pro_applicant=$_POST['applicant_name'];
	$pro_appliphone=$_POST['applicant_phone'];
	$pro_location=$_POST['program_location'];
	$pro_Sdate=$_POST['programS_date'];
	$pro_Edate=$_POST['programE_date'];
	$pro_Stime=$_POST['programS_time'];
	$pro_Etime=$_POST['programE_time'];
	$proParticiple_merit=$_POST['participle_merit'];
	$pro_status="In Pending";

	$table1 = "INSERT INTO report_parmerit (pro_id, program_name, program_Association, progarm_supervisor, program_participle, program_applicant, proAppli_phone, program_location, programS_date , programE_date, programS_time, programE_time, participle_merit, program_proof, program_status)VALUES ('','$pro_name','$pro_association','$pro_supervisor','$pro_particpleNum','$pro_applicant','$pro_appliphone','$pro_location','$pro_Sdate','$pro_Edate','$pro_Stime','$pro_Etime','$proParticiple_merit','$proof', '$pro_status')";

	$result_0 = mysqli_query($link, $table1);

	$x=$_POST['committee_num'];
	for ($i=0; $i <$x ; $i++) 
	{ 
		$std_id=$_POST['student_id'][$i];
		$std_name=$_POST['student_name'][$i];
		$std_phone=$_POST['student_phone'][$i];
		$std_position=$_POST['student_position'][$i];

		if ($std_position=='program_chair')
		{
			$comm_merit = 500;
		}
		else if ($std_position=='program_cochair')
		{
			$comm_merit = 450;
		}
		else if ($std_position=='main_committee')
		{
			$comm_merit = 300;
		}
		else if ($std_position=='sub_committee') 
		{
			$comm_merit = 200;
		}

		$table2 = "INSERT INTO comm_detail (pro_id,program_name,comm_no,std_id,std_name,std_phone,std_position,comm_merit)VALUES('','$pro_name','$x','$std_id','$std_name','$std_phone','$std_position','$comm_merit')";

		$result_1 = mysqli_query($link, $table2);
		if($result_0 && $result_1)
		{	

				$message='"Successly Apply Program"';
							echo "<script type='text/javascript'>alert('$message');
           							 window.location = 'programDetails.php?program_name=$pro_name';</script>";
		}
		else
		{
				$message='"Failed to Apply Program"';
							echo "<script type='text/javascript'>alert('$message');
           							 window.location = 'programDetails.php?program_name=$pro_name';</script>";
		}
				
	}
}	
?>
	</table>
	</form>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    var data_fo = $('.field').html();
    var sd = '<div class="remove" align="left"><img src="image/remove_icon.png" width="25px" height="25px"></div>';
    var data_combine = data_fo.concat(sd);
    var max_fields = 19; 
    var wrapper = $(".user"); 
    var add_button = $(".add"); 

    var x = 1; 
    $(add_button).click(function(e){ 
      e.preventDefault();
      if(x <= max_fields){ 
        x++; 
        $(wrapper).append(data_combine); 

      }
      
    });

    $(wrapper).on("click",".remove", function(e){ 
        e.preventDefault();
        $(this).prev('.user').remove();
        $(this).remove();
        x--;
    })

 
</script>