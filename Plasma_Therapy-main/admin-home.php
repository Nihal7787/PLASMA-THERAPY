<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	
   
</head>
<body>
<div class="full">
	<div id="inner_full">
		<div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;">Home</a></h2></div>
		<h3>	<p align="right"><a href="logout.php">LOGOUT</a></p></h3>
		<br><br>
        <div id="body">
		<br>
		<?php
		$un=$_SESSION['un'];
		if(!$un)
		{
			header("Location:index.php");
		} 
		?>
			<h1 align='center'>Welcome!</h1><br>

            <ul>
            	
                <li><a href="Donorreg.php">DONOR REGISTRATION</a></li>
                <li><a href="showbeds.php">show available beds</a><li>
               <li><a href="beds.php">beds availability</a><li>
                <li><a href="stock.php">RECEPIENT REGISTRATION</a></li>

            </ul><br><br><br><br>




		</div>
		
</div>
</body>
</html>