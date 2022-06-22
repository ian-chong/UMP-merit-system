<?php
require_once('databases.php');
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>STUDENT PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/figure.css" rel="stylesheet">

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
		.button1
		{
			background-color: #008CBA;
			border:blue;
			color: white;
			padding: 32px 16px;
			text-align: center;
			border-radius: 12px;
			display:inline-block;
			font-size: 32px;
			margin: 4px 2px;
			cursor: pointer;
			opacity: 0.6;
			transition: 0.3s;
			width: 100%
		}

		.button1:hover{opacity: 1}
		{
			background-color: white;
			color: black;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		table.center
		{
			margin-left: auto;
			margin-right: auto; 
		}
		.container-fluid
		{
			background-color:black;
			color: #FF8C00;
			font-size: 20px;
			width: 100%;
			height: 60px;
		}
		.logOut
		{
			background-color: black;
			color: white;
			font-size: 12px;
			column-width: 30%;
			height: 40px;
			border-color: black;
			cursor: pointer;
			position: absolute;
			top: 10px;
			right: 15px;
		}
		.logOut:hover
		{
			background-color:dimgray; 
			column-width: 30%;
			height: 40px;
			border-color: black;
			color: white;

		}
	</style>
</head>
<body>
	
          <div class="container-fluid">
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span> MyMerit
            	<button onclick="document.location='userhome.php'" class="logOut">Log Out</button>
            </h1>
          </div>
	<br>
	
	<table border="0" class="center">
	<tr>
		<td colspan="2"><img src="image/umplogo.png" alt="University Malaysia Pahang"></td>
	</tr>
	</table>
	
<br>
	<br>
	
	<div class="container">
          <div class="row">
            <div class="wrap-login col-md-7 col-md-offset-3">
              <h2 style="margin-bottom: 30px;"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> UMP MyMERIT SYSTEM STUDENT</h2>
              <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-default main-color-bg" onclick="window.location.href='checkMerit_interface.php'">Check Merit</button>
                </div>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-default main-color-bg" onclick="location.href='https://webqr.com'">Scan QR coode</button>
                </div>
				
			  </div>
              <br>
              </div>
            </div>
        </div>

</body>
</html>