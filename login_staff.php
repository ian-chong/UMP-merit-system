<?php
   include('dbcontroller.php');
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST")
   { 
      $myusername = mysqli_real_escape_string($conn,$_POST['coord_username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['coord_password']);
      $sql = "SELECT proCoor_id FROM program_Coordinator WHERE proUser_name = '$myusername' and proCoor_password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
      {
         //session_register("myusername");
         $_SESSION['name'] = $myusername;

         header("location: programCoor_interface.php");
      }else 
      {
         header( "location: login_failed.php");
      }
   }
?>
