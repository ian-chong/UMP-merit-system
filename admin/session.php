 <?php
   include("dbConnect.php");
   session_start();
   $user_check = $_SESSION['login_user'];
   $ses_sql = mysqli_query($con,"select stud_user from login_student where stud_user = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['stud_user'];
   if(!isset($_SESSION['login_user'])){
      header("location:userhome.php");
   }
?>
