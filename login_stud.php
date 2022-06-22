<?php
   include("dbcontroller.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($conn,$_POST['stud_user']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['stud_pass']);
      $sql = "SELECT std_id FROM student WHERE std_id = '$myusername' and std_password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
      {
         $_SESSION['login_user'] = $myusername;
         header("location: student_main.php");
      }else 
      {
         header( "location: login_failed.php");
      }
   }
?>
