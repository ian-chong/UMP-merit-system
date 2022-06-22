<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if($_POST['submit'])
{

$proUser_name=$_POST['proUser_name'];
$proCoor_name=$_POST['proCoor_name'];
$proCoor_email=$_POST['proCoor_email'];
$proCoor_phone=$_POST['proCoor_phone'];
$proCoor_office=$_POST['proCoor_office'];
$proCoor_office_no=$_POST['proCoor_office_no'];
$proCoor_password=$_POST['proCoor_password'];
$result = mysqli_query($mysqli, "INSERT INTO  program_coordinator (proUser_name,proCoor_name,proCoor_email,proCoor_phone,proCoor_office,proCoor_office_no,proCoor_password) 
VALUES ('$proUser_name','$proCoor_name','$proCoor_email','$proCoor_phone','$proCoor_office','$proCoor_office_no','$proCoor_password')");



echo"<script>alert('New Coordinator has been added successfully');</script>";

}
?>
<!doctype html>
html lang="en" class="no-js">

<head>
	
	<meta charset="UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>ADD COORDINATOR</title>
	
	
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
							</div>
							</div>
							</div>
							<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Coordinator</div>
									<div class="panel-body">
									<?php if(isset($_POST['submit']))
{ ?>

<?php } ?>
										<form method="post" class="form-horizontal">
											
	
<br>
<div class="form-group">
<label class="col-sm-2 control-label">Program Coord Username.</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="proUser_name" id="proUser_namel" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Program Coord Name</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="proCoor_name" id="proCoor_name" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Program CoordEmail</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="proCoor_email" id="proCoor_email" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Program Coord Phone</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="proCoor_phone" id="proCoor_phone" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Program Coord Office Name</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="proCoor_office" id="proCoor_office" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Program Coord Office No</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="proCoor_office_no" id="proCoor_office_no" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Program Coord Password</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="proCoor_password" id="proCoor_password" value="" required="required">
</div>
</div>


</div>

<div class="col-sm-8 col-sm-offset-2">
<input class="btn btn-primary" type="submit" name="submit" value="Create Coordinator ">
												</div>
											</div>

										</form>

									</div>
								</div>
									
							
							</div>
						
									
							

							</div>
						</div>

					</div>
				</div> 	
				

			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</script>
</body>

</html>