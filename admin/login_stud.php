<?php
   include("dbcontroller.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($conn,$_POST['stud_user']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['stud_pass']);
      $sql = "SELECT id FROM login_student WHERE stud_user = '$myusername' and stud_password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
      {
         $_SESSION['login_user'] = $myusername;
         header("location: ProgramCoor_interface.php");
      }else 
      {
         header( "location: login_failed.php");
      }
   }
?>
