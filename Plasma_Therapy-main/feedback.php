<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
 	<title>Feedback Form</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">		
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="feedback.css">
    <style>
        body{
	background-image: url(IMG8);
	font-family: 'josefin Sans', Sans-serif;
    
    margin: auto;
}


.radio-inline{
	margin: 0px 40px 20px 0px;
	cursor: pointer;
}

label{
	color: #000;
}

#text{
	height: 40px;
	border-radius: 5px;
	padding-left: 10px;
	font-size: 14px;
	border: none;
	width: 100%;
	color: #000;
}

#message{
	outline: none;
	border: none;
	padding: 10px 0px 0px 15px;
	font-size: 16px;
	color:#000;
	border-radius: 5px;
	width: 100%
}

    </style>
</head>

<body>	

<div class="view">
	
</div>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			
			<h1 class="text-center mt-5 font-weight-bold">FEEDBACK</h1>
			<hr class="bg-white">
			<h6 class="text-center">Please write your feedback below:</h6>
			<h3 class="mt-4">How do you rate your overall experience?</h3>

			<form action="" method="POST">
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Bad</label>
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Average</label>
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Good</label>

			</div>
			</div>					

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-4">Full Name*<br>
					<input type="text" name="fullname" required="" placeholder="your full name"></label>

					<label class="col-md-4">Email*<br>
					<input type="email" name="email" required="" placeholder="ENTER YOUR VALID EMAIL"></label>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-4">Age*<br>
					<input type="number" name="age" required="" placeholder="ENTER YOUR AGE"></label>

					<label class="col-md-4">Phone*<br>
					<input type="number" name="phone" required="" placeholder="YOUR CONTACT NUMBER"></label>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-8">Message*<br>
					<textarea name="message" required="" placeholder="Write yor message here" cols="48" rows="5"></textarea></label>
			</div>

						<div class="row">
				<div class="col-md-2"></div>
				<button class="btn btn-primary" style="width: 53.5%; position: absolute; margin-left: 5%;">Submit</button>
			</div>
			</form>
</div>

</body>
</html>  
<?php
            	if(isset($_POST['submit']))
            	{
            		$experience=$_POST['experience'];
            		$fullname=$_POST['fullname'];
            		$email=$_POST['email'];
            		$age=$_POST['age'];
            		$phone=$_POST['phone'];
            		$message=$_POST['message'];
            		$q=$db->prepare("INSERT INTO feedback(experience,fullname,,email,age,phone,message) VALUES(:experience,:fullname,:email,:age,:phone,:message)");
            		$q->bindValue('experiene',$experience);
            		$q->bindValue('fullname',$fullname);
            		$q->bindValue('email',$email);
            		$q->bindValue('age',$age);
            		$q->bindValue('phone',$phone);
            		$q->bindValue('message',$message);
            		if($q->execute())
            		{
            			echo "<script>alert('donor registration succesfull')</script>";
            		}
            		else
            		{
            			echo "<script>alert('donor registration failed')</script>";
            		}

            	}
            	
            	?>
 
