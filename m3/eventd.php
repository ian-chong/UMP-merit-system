<!DOCTYPE html>
<html lang="en">
<head>

  <title>Student Attendance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
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
		.button2
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

		.button2:hover{opacity: 1}
		{
			background-color: white;
			color: black;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.button3
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

		.button3:hover{opacity: 1}
		{
			background-color: white;
			color: black;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.button4
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

		.button4:hover{opacity: 1}
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
		table, th, td 
		{
          border: 1px solid black;
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
		p
		{
			background-color: black;
			color: #FF8C00;
			font-size: 12px;
			border-color: black;
			position: absolute;
			top: 25px;
			left: 180px;
		}
	</style>
</head>
<body>


<form action="recordComm.php" class="needs-validation" novalidate method="post">
  <div class="form-group">
  	
          <div class="container-fluid">
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span> MyMerit 
            	<button onclick="LogOut()" class="logOut">Log Out</button>
            </h1><p >system</p>
          </div>
	<br>
	<br>

	<table border="0" class="center">
	<tr>
		<td colspan="2"><img src="image/umplogo.png" alt="University Malaysia Pahang"></td>
	</tr>
	</table>
    <label for="Committee">Student ID:</label>
    <input type="text" class="form-control" id="std_id" placeholder="Enter student matrics id" name="std_id" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="PhoneNum">Student Name:</label>
    <input type="text" class="form-control" id="std_name" placeholder="Enter name" name="std_name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
    <div class="form-group">
    <label for="ip">IP Address:</label>
    <input type="text" class="form-control" id="ipAddress" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" name="ipAddress" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
      <label for="uname">Identification Number:</label>
    <input type="text" class="form-control" id="ic_num" placeholder="Enter identification number" name="ic_num" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="Password">Password:</label>
    <input type="password" class="form-control" id="Password" placeholder="Enter password" name="Password" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
    <div class="form-group">
    <label for="gender">Gender:</label>
    <input type="text" class="form-control" id="gender" placeholder="Eg: Male or Female" name="gender" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
   <div class="form-group">
    <label for="gender">Date:</label>
    <input type="date" class="form-control" id="date" placeholder="Eg: Male or Female" name="date" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I agree on the terms and conditions.
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
  
  <button type="submit" class="btn btn-primary" name="confirm">Confrim</button>

<div id="map" style="width:100%;height:200px;" text-align="center"></div>

<script> 
      function initMap() { 
        var uluru = {lat: 3.761870, lng: 103.212850}; 
        var map = new google.maps.Map(document.getElementById('map'), { 
          zoom: 5, 
          center: uluru 
        }); 
        var marker = new google.maps.Marker({ 
          position: uluru, 
          map: map 
        }); 
      } 
    </script> 
    <script async defer 
	src= "https://maps.googleapis.com/maps/api/js?key=AIzaSyCVObXBl38QihWibbOMkXr4YKaOT44VOvY&callback=initMap"> 
    </script> 
</script>

</body>
</html>








</form>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


