<?php
    require ('databases.php');
    if(isset($_POST['reset'])){
        $proU_name = $_POST['u_name'];
        $n_password = $_POST['n_pwd'];
        $c_password = $_POST['c_pwd'];
        if($n_password == $c_password)
        {
        $update = "UPDATE program_coordinator SET proCoor_password='".$_POST['c_pwd']."' WHERE proUser_name='$proU_name'";
        $updated = mysqli_query($link, $update);
        $message = "Password is reset!!!";
        echo "<script type='text/javascript'>alert('$message');
              window.location ='login_staff.html';
              </script>";        	
        }
        else
        {
       		$message = "Confirm Password not match with new password. Please enter again";
       		 echo "<script type='text/javascript'>alert('$message');
              window.location ='reset_proCoor_password.php';
              </script>";   
        }


    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password For User</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    	  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/figure.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    	<style type="text/css">
		body
		{
			background-image:url(image/b1.jpg);
			background-size:cover;
			background-attachment:fixed;
		}
		img
		{
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 30%;
		}
		.container-fluid
		{
			background-color:black;
			color: #FF8C00;
			font-size: 20px;
			width: 100%;
			height: 60px;
		}

	</style>
</head>
<body> 
 <div class="container-fluid">
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span> MyMerit
            	
            </h1>
          </div>
	<br>
	<center>
	<table border="0">
	<tr>
		<td colspan="2"><img src="image/umplogo.png" alt="University Malaysia Pahang"></td>
	</tr>
	</table>
	</center>&nbsp;
	        <center>
    <form name="reset" action="reset_proCoor_password.php" method="POST">&nbsp;
        
        <div class="card bg-light">
        <div class="card-heading">
        <table border="2">
            <tr><td colspan="2" ><h2 class="title">Reset Password</h2></td></tr>
        </div>

        <div class="card-body">
        <div class="form-row">
        	<tr>
            <div class="name" ><td style="font-size:18px">User Name:</td></div>               
            	 <div class="value">
                    <div class="input-group">
                    <td><input type="text" name="u_name" placeholder="User Name" class="input--style-5" required></td></tr>
                    </div>
                </div>
            </div>

        <div class="card-body">
        <div class="form-row">
        	<tr>
            <div class="name"><td style="font-size:18px">New Password:</td></div>
                <div class="value">
                    <div class="input-group">
                    <td><input type="password" name="n_pwd" placeholder="New Password" class="input--style-5" required></td></tr>
                    </div>
                </div>
            </div>
        <div class="form-row">
        	<tr>
            <div class="name"><td style="font-size:18px">Confirm Password:</td></div>
                <div class="value">
                    <div class="input-group">
                     <td><input type="password" name="c_pwd" placeholder="Confirm Password" class="input--style-5" required></td></tr>
                    </div>
                </div>
            </div>
        </table>
  			<br><br>
            <center>
                <button class="btn btn-primary" type="submit" name="reset" style="font-size:18px">Reset</button>
            </center>
            <div>

                <center>
                    <a href="login_staff.html" style="font-size:18px">Return To Login Page</a>
                </center>
            </div>
    
	  </center>
</body>
</html>

