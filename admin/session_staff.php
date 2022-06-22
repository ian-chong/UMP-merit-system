 <?php
   include("dbcontroller.php");
   session_start();
   $user_check = $_SESSION['login_coord'];
   $ses_sql = mysqli_query($conn,"select coord_user from login_coord where coord_user = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['coord_user'];
   if(!isset($_SESSION['login_coord'])){
      header("location:login_staff.html");
   }
?>
