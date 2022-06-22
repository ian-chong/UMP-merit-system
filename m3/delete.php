<!-- ubah.php -->
<!-- Interface of update data. -->

<!-- buang.php -->
<!-- To delete one particular data. -->

<?php
include('db_connect.php');

if(isset($_GET['id']))
{
	$id = $_GET['id'];
}
else
{
	$id = "Not found";
}

$query = "DELETE FROM participant WHERE id = '$id'";
$result = mysqli_query($link,$query) or die ("Could not execute query in update.php");

if($result){
echo "<script type= 'text/javascript'> window.location='view.php'</script>";
}
?>