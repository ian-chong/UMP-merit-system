<?php
include('db_connect.php');

//code for add courses

if(isset ($_POST['confirm']))
{

$C_Name=$_POST['C_Name'];
$C_PhoneNum=$_POST['C_PhoneNum'];
$C_gender=$_POST['C_gender'];
$date=$_POST['date'];

$result = mysqli_query($link, "INSERT INTO  attendance (C_Name,C_PhoneNum,C_gender,date) VALUES ('$C_Name','$C_PhoneNum','$C_gender','$date')");



echo"<script>alert('Attendance has been recorded!'); </script>";
echo "<script type = 'text/javascript'> window.location='../m4/checkMerit_interface.php' </script>";
}
?>