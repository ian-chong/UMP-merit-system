<?php
require_once('databases.php');

if(isset($_GET['qq']))
{
	$qq=$_GET['qq'];
	$delete1="DELETE FROM report_parmerit WHERE program_name = '$qq'";
	$result1=mysqli_query($link,$delete1);

	$delete2="DELETE FROM comm_detail WHERE program_name='$qq'";
	$result2=mysqli_query($link,$delete2);
		if($result1 && $result2)
			{
				$message='"Successly Delete Program Data"';
				            echo "<script type='text/javascript'>alert('$message');
           							 window.location = 'interface_reportlist.php?qq=$qq';</script>";
			}
			else
			{
				$message='"Fail to delete Program Data"';
							echo "<script type='text/javascript'>alert('$message');
           							 window.location = 'interface_reportlist.php?qq=$qq';</script>";
			}
				
			
}

?>