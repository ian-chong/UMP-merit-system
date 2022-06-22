
<?php
session_start();

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
												  	<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									
               
              <?php
              require_once("dbcontroller.php");
              $keyword=$_POST['key'];
              $result = mysqli_query($conn,"SELECT * FROM comm_detail WHERE program_name LIKE '%$keyword%' ");
              echo "<table class='table table-bordered table-hover' border='2'>
              <tr>
              <th>id</th>
              <th>Program Name</th>
              <th>Commitee No</th>
              <th>Commitee Merit</th>
              
              </tr>";
              if (mysqli_num_rows($result)==0)
              echo "No such program found... Try with another keyword";
              while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['program_name'] . "</td>";
                echo "<td>" . $row['comm_no'] . "</td>";
                echo "<td>" . $row['comm_merit'] . "</td>";
                
                
                }
              echo "</table>";
              mysqli_close($conn);
              ?>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
  </body>
</html>
