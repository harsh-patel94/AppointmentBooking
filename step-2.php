<html lang="en"
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
	<meta name="robots" content="index,follow">

	<meta name="viewport" content="width=device=width, initial-scale=1.0" >

	<title>Appointment Booking System</title>
	<link href="css/1140.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet; type='text/css'>
</head>

<body>
 	<div class= "container12">
 		<?php include "nav.php"; ?>
 		<h1 id="home"> <strong> Great! </strong> Just one more step </h1>

 		<form action="" method="POST">

 			<div class = "alert"></div>
 			<div class="row">

 				<div class = "column4">
 					<input type = "text" class = "large-fld" name="email" value="" placeholder="Email Address"
 				</div>

 				<div class = "column5">
 					<input type = "text" class = "large-fld" name="password" value="" placeholder="Password"
 				</div>

 				<div class = "column3">
 					<input type = "submit" class = "large-btn" name="enter" value="Log in">
 				</div>

 			</div>


 		</form>
 		<p id="home-info"> We will take care of your pooch! We offer services like: <span> Dog Washing, Dog Vet </span>  </p>

 	</div>

</body>

</html>
