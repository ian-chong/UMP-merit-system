<?php
include('db_connect.php');

//code for add courses

if(isset ($_POST['submit']))
{


$result = mysqli_query($link, "INSERT INTO  attendance (ic_num,Password,gender,date) VALUES ('$ic_num','$Password','$gender','$date')");



echo "<script>alert('Attendance has been recorded!'); </script></script>";
echo "<script type = 'text/javascript'> window.location='../m4/checkMerit_interface.php' </script>";
}
?>

