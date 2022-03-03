<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>BEDS AVAILABILITY</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
<div class="full">
	<div id="inner_full">
		<div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;">Home</a></h2></div><br>
		<h3> <p align="right"><a href="logout.php">LOGOUT</a></p><h3>
        <div id="body">
		<br>
		<?php
		$un=$_SESSION['un'];
		if(!$un)
		{
			header("Location:index.php");
		} 
		?>
		
		<br>
		
			<h1 align='center'> BEDS AVAILABILITY</h1>
           
            <center><div id="form">
            	<form action="" method="post">
            	<table>
            		<tr>
            			<td width="200px" height="50px"> Hosipital Name</td>
            			<td width="200px" height="50px"><input type="text" name="hosipitalname" placeholder=""></td>
            			<td width="200px" height="50px">state</td>
            			<td width="200px" height="50px"><input type="text" name="state" placeholder=""></td>
            		</tr>


            			<tr>
            			<td width="200px" height="50px">City</td>
            			<td width="200px" height="50px"><input type="text" name="city" placeholder=""></td>
            			<td width="200px" height="50px">No.beds with oxygen cylinders</td>
            			<td width="200px" height="50px"><input type="text" name="nowithoxy" placeholder=""></td>
            		</tr>


            			<tr>
            			<td width="200px" height="50px">No.beds with out oxygen cylinders</td>
            			<td width="200px" height="50px"><input type="text" name="nowithoutoxy" placeholder=""></td>
            			
            			

            			</td>
            		</tr>

            		<tr>
            			<td width="200px" height="50px"> Hosipital contact number</td>
            			<td width="200px" height="50px"><input type="text" name="hosipitalnum" placeholder=""></td>
            		</tr>

                      
                       <tr>
                       	<td align="center"><input type="submit" name="sub" value="submit"></td>
                       </tr>

            	</table>
            	</form>
            	<?php
            	if(isset($_POST['sub']))
            	{
            		$hosipitalname=$_POST['hosipitalname'];
            		$state=$_POST['state'];
            		$city=$_POST['city'];
            		$nowithoxy=$_POST['nowithoxy'];
            		$nowithoutoxy=$_POST['nowithoutoxy'];
            		$hosipitalnum=$_POST['hosipitalnum'];
            		$q=$db->prepare("INSERT INTO beds_availabilty(hosipitalname,state,city,nowithoxy,nowithoutoxy,hosipitalnum) VALUES(:hosipitalname,:state,:city,:nowithoxy,:nowithoutoxy,:hosipitalnum)");
            		$q->bindValue('hosipitalname',$hosipitalname);
            		$q->bindValue('state',$state);
            		$q->bindValue('city',$city);
            		$q->bindValue('nowithoxy',$nowithoxy);
            		$q->bindValue('nowithoutoxy',$nowithoutoxy);
            		$q->bindValue('hosipitalnum',$hosipitalnum);
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
            </div></center>




		</div>
		
</div>
</body>
</html>