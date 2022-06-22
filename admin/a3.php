<!--kemaskini.php-->
<!-- To update data of ubah.php into database. -->
<?php
include ("dbcontroller.php");

if($_POST){
$id = $_POST['id'];
$program_name = $_POST["program_name"];
$program_Association = $_POST["program_Association"];
$progarm_supervisor = $_POST["progarm_supervisor"];
$program_participle = $_POST["program_participle"];
$program_applicant = $_POST["program_applicant"];
$proAppli_phone = $_POST["proAppli_phone"];
$program_location = $_POST["program_location"];
$programS_date = $_POST["programS_date"];
$programE_date = $_POST["programE_date"];
$programS_time = $_POST["programS_time"];
$programE_time = $_POST["programE_time"];
$participle_merit = $_POST["participle_merit"];
$program_proof = $_POST["program_proof"];
$program_status = $_POST["program_status"];

$query = "UPDATE report_parmerit SET program_name = '$program_name', program_Association  = '$program_Association', progarm_supervisor  = '$progarm_supervisor', program_participle = '$program_participle', program_applicant= '$program_applicant',
  proAppli_phone = '$proAppli_phone', program_location = '$program_location', programS_date = '$programS_date', programE_date = '$programE_date',  programS_time= '$programS_time',
  programE_time = '$programE_time', participle_merit = '$participle_merit', program_proof = '$program_proof', program_status = '$program_status' WHERE pro_id = '$id'";
 if(mysqli_query($conn,$query) === TRUE) {
        $message = "Succesfully Updated!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = 'a1.php?pro_id=$id';</script>";
      
    } else {
        echo "Erorr while updating record : ".  mysqli_error($conn);
    }
    



if($result){
header("location: a1.php?id=".$id);

}
    mysqli_close($conn);
}
?>
