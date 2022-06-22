<?php
require ('databases.php');

if (isset($_GET['no'])) {
    $id = $_GET['no'];

    $sql = "SELECT * FROM report_parmerit WHERE program_name = '$id'";
    $result = mysqli_query($link, $sql);

    $file = mysqli_fetch_assoc($result);

    $filepath = 'm1/proof/'.$file['program_proof'];
   
    if(preg_match('/^[^.][-a-z0-9_.]+[a-z]$/i', subject))
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: '.filesize($filepath));
        readfile($filepath);
    
        exit;
    }
}
?>