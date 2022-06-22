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

$query = "DELETE FROM attendance WHERE id = '$id'";
$result = mysqli_query($link,$query) or die ("Could not execute query in update.php");

if($result){
echo "<script type= 'text/javascript'> window.location='view1.php'</script>";
}
?>