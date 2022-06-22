 <?php
   include("dbcontroller.php");
   session_start();
   $user_check = $_SESSION['name'];
   $ses_sql = mysqli_query($conn,"select proUser_name from program_coordinator where proUser_name = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['proUser_name'];
   if(!isset($_SESSION['name'])){
      header("location:login_staff.html");
   }
?>
