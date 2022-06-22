<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
include('dbcontroller.php');
check_login();


if(isset($_POST['delete'])){
    $progID = $_POST['progID'];
    $delete = "DELETE FROM report_parmerit WHERE pro_id= $progID ";
    $result = mysqli_query($conn,$delete);
    if(mysqli_query($conn, $delete)){
    $message = "Program deleted";
    echo "<script type='text/javascript'>alert('$message');
        window.location = 'access-log.php';</script>";
}
else  {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	
	<meta charset="UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Request List</title>
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
                                <form method="post" action="search2.php">
                                 <div class="form-group">
                                     <label for="">Search Keyword</label>
                                        <input type="text" class="form-control" id="" placeholder="Search here" name="key">
                                          </div>          
                                          <button type="submit" class="btn btn-default main-color-bg btn-login col-md-4 col-md-offset-4">Search</button>
                                               </form>
                                                  </div>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>ID</th>
											<th>Program Name</th>
											<th>Program Association</th>
											<th>Merit</th>
											<th>Program Approval</th>
											<th>Action</th>
										</tr>
									</thead>
									
<tbody> 
<?php	
//$aid=$_SESSION['id'];
//$ret="SELECT * FROM comm_detail,report_parmerit WHERE comm_detail.program_name = report_parmerit.program_name ";
$ret="SELECT * FROM comm_detail RIGHT JOIN report_parmerit ON comm_detail.id = report_parmerit.pro_id  "; 
//$ret="SELECT * FROM report_parmerit "; 
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
		  
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->program_name;?></td>
<td><?php echo $row->program_Association;?></td>
<td><?php echo $row->participle_merit;?></td>
<td><?php echo $row->program_status;?></td>
<td>
<form action="" method="POST">

         <input class="btn btn-danger" type="submit" name="delete" value="DELETE">
         	 <input type="hidden" name="progID" value="<?=$row->pro_id;?>">

</form>






	<!-- <a href="access-log.php?del=<?=$row['id']?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close"></i></a> -->
</td>

										</tr>

									<?php
$cnt=$cnt+1;
									 } ?>
								
									</tbody>
								</table>

								
							</div>
						</div>

					
					</div>
				</div>

			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
