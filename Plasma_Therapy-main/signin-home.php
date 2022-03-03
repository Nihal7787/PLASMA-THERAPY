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
<body>
<div class="full">
	<div id="inner_full">
		<div id="header"><h2>SignUp</h2></div><br><br>
		<div id="body">
			<br><br><br><br><br>
            <div id='log'>
			<form action="" method="post">
			<img id="logim"src="log in avatar.jpg"  alt="picture" width="75px" height="75px">
                <h2>Create account</h2>
                <hr color="#5295C7" style="width: 250px;">
			<form action="" method="post">
			<table align="center">
				<tr>
					<td width="100px" height="50px"><b>Username</b></td>
					<td width="100px" height="50px"><input type="text" name="un" placeholder="abcde" style="width: 100px;height: 30px; border-radius: 5px"></td>

                </tr> 

                <tr>
					<td width="100px" height="50px"><b>Password</b></td>
					<td width="100px" height="50px"><input type="text" name="ps" placeholder="*****" style="width: 100px;height: 30px; border-radius: 5px"></td><br><br>
                </tr> 

                <tr>
                    <br><br><br>
                	<td><input  type="submit" name="sub" value="Save" style="width: 60px ; height: 30px ; border-radius: 5px;"></td>
                    <td><input  type="submit" name="exit" value="exit" style="width: 60px ; height: 30px ; border-radius: 5px;"></td>
                    
                </tr>	
            </table> 
        </form>
</div>
        <?php
        if(isset($_POST['sub']))
        {
        	$un=$_POST['un'];
            $ps=$_POST['ps'];
            $q1=$db->prepare("INSERT INTO admin (un,ps) VALUES(:un,:ps)");
            $q1->bindValue('un',$un);
            $q1->bindValue('ps',$ps);
            $q1->execute();
            
            }

           if(isset($_POST['sub']))
           {
            echo "<script>alert('SIGN IN IS DONE successful, please click exit button after u have signed in')</script>";
            
           }  

           if(isset($_POST['exit']))
           {
          header("Location:index.php");
            
           }  
            

       
        ?>       
		</div>
		
	</div>	
</body>
</html>	
