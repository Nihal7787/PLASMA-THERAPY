<?php
include('connection.php');
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>RECIPIENT Registeration</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
<div class="full">
	<div id="inner_full">
		<div id="header"><h2><a href="admin-home.php" style="text-decoration: none; color: white;"> Home</a></h2></div>
		<h3> <p align="right"><a href="logout.php">LOGOUT</a></p><h3><br>
		<div id="body">
			<br>
			
			<?php
            $un=$_SESSION['un'];
            if(!$un)
            {
            	header("Location:index.php");
            }    
			?>
			<h1>Recipient Registeration</h1><br><br><br>
			<center><div id="form">
				<form action="" method="post">
				<table>
					<tr>
						<td width="200px" height="50px">Name</td>
						<td width="200px" height="50px"><input type="text" name="name" required></td>


						<td width="200px" height="50px">Age</td>
						<td width="200px" height="50px"><input type="text" name="age" required ></td>


					</tr>	

					<tr>
						<td width="200px" height="50px">City</td>
						<td width="200px" height="50px"><input type="text" name="city" placeholder="" required></td>


						<td width="200px" height="50px">E-mail</td>
						<td width="200px" height="50px"><input type="email" name="email" placeholder=""required></td>


					</tr>

					<tr>
						<td width="200px" height="50px">Address</td>
						<td width="200px" height="50px"><textarea name="address" required></textarea></td>

                        <td width="200px" height="50px">Select Blood Group </td>
                        <td width="200px" height="50px">
                            <select name="bgroup" required>
                                <option>O+</option>
                                <option>O-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>A+</option>
                                <option>A-</option>
								<option>AB-</option>
								<option>AB-</option>

                            </select>   
                        </td>

					</tr>

					<tr>


						<td width="200px" height="50px">Mobile</td>
						<td width="200px" height="50px"><input type="text" name="mno" placeholder="" required></td>


					

					

					

					</tr>	

					<tr>
						<td><input type="submit" name="sub" value="show"></td>

					</tr>	




	


                </table>
            </form>
            <?php
            if(isset($_POST['sub']))
            {
            	    $name=$_POST['name'];
                    $age=$_POST['age'];
                    $city=$_POST['city'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $bgroup=$_POST['bgroup'];
                    $mno=$_POST['mno'];

            	
            	$q=$db->prepare("INSERT INTO recipient_registration (name,age,city,email,address,bgroup,mno) VALUES(:name,:age,:city,:email,:address,:bgroup,:mno)");
            	    $q->bindValue('name',$name);
                    $q->bindValue('age',$age);
                    $q->bindValue('city',$city);
                    $q->bindValue('email',$email);
                    $q->bindValue('address',$address);
                    $q->bindValue('bgroup',$bgroup);
                    $q->bindValue('mno',$mno);
            	if($q->execute())
            	{
            		echo "<script>alert('Recipient Registeration successful')</script>";
            	}
            	else
            	{
            		echo "<script>alert('Recipient Registeration FAIL')</script>";

            	}
            }

            if(isset($_POST['sub']))
            {
            	    $name=$_POST['name'];
                    $age=$_POST['age'];
                    $city=$_POST['city'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $bgroup=$_POST['bgroup'];
                    $mno=$_POST['mno'];

            	$q=$db->prepare("SELECT * FROM recipient_registration where name='$name' AND age='$age' AND city='$city' AND email='$email' AND address='$address' AND  bgroup='$bgroup'");
        	     $q->execute();
        	     $res=$q->fetchAll(PDO::FETCH_OBJ);

        	     if($res)
        	{
                $_SESSION['name']=$un;
        		header("Location:Donorlist.php");
        	}
        	else
        	{
        		echo "<script>alert('Wrong user')</script";
        	}
        }	

            
            ?> 
            <br><br><br> 

             
			</div></center>	
			
		</div>
		<div id="footer">
		</div>	
	</div>	
</body>
</html>	
