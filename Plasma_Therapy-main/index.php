<?php
include('connection.php');
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	
</head>
<body background="image1.png">
<div class="full">
	<div id="inner_full">
	<div id="header"><a href='indexx.php'><h2>Home</h2></a></div>
	
	<br><br>
		<div id="body">
			<br><br><br><br><br>
			<div id='log'>
			<form action="" method="post">
			<img id="logim"src="log in avatar.jpg"  alt="picture" width="75px" height="75px">
                <h2>Login</h2>
                <hr color="#5295C7" style="width: 250px;">
			<table align="center">
				<tr>
					<td width="100px" height="50px"><b>Username</b></td>
					<td width="100px" height="50px"><input type="text" name="un" placeholder="abcde" style="width: 100px;height: 30px; border-radius: 5px"></td>

                </tr> 

                <tr>
					<td width="100px" height="50px"><b>Password</b></td>
					<td width="100px" height="50px"><input type="password" name="ps" placeholder="*****" style="width: 100px;height: 30px; border-radius: 5px"></td>
                </tr> 

                <tr><br><br><br><br>
                	<td><input  type="submit" name="sub" value="Login" style="width: 60px ; height: 30px ; border-radius: 5px;"></td>
                    <td><input  type="submit" name="sig" value="REGISTER" style="width: 80px ; height: 30px ; border-radius: 5px;"></td>
                </tr>	
            </table> 
        </form>
		
		  
	   
       
	   
        <?php
        if(isset($_POST['sub']))
        {
        	$un=$_POST['un'];
        	$ps=$_POST['ps'];
        	$q=$db->prepare("SELECT * FROM admin where un='$un' AND ps='$ps'");
        	$q->execute();
        	$res=$q->fetchALL(PDO::FETCH_OBJ);
        	if($res)
        	{
                $_SESSION['un']=$un;
        		header("Location:admin-home.php");
        	}
        	else
        	{
        		echo "<script>alert('Wrong user')</script";
        	}
        }

        if(isset($_POST['sig']))
        {
           header("Location:signin-home.php");
           
        }   	
        ?>       
		</div>
		
	</div>	
</body>
</html>	
