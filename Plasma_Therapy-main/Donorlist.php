<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>DONOR LIST</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
        td{
            width: 200px;
            height: 40px;
        }



    </style>
</head>
<body>
<div class="full">
	<div id="inner_full">
		<div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;">Donor's list</a></h2></div>
      <h3>  <p align="right"><a href="logout.php">LOGOUT</a></p></h3>
        <div id="body">
		<br>
		<?php
		$un=$_SESSION['un'];
		if(!$un)
		{
			header("Location:index.php");
		} 
		?>
			
            <center><div id="form">
            	<table>
                 <tr>
                     <td><center><b><font color="blue">Name</font></b></center></td>
                     <td><center><b><font color="blue">age</font></b></center></td>
                     <td><center><b><font color="blue">city</font></b></center></td>
                     <td><center><b><font color="blue">email</b></font></center></td>
                     <td><center><b><font color="blue"><font color="blue">address</b></font></center></td>
                     <td><center><b><font color="blue">bloodgroup</b></font></center></td>
                     <td><center><b><font color="blue">contact number</b></font></center></td>
                  </tr>  
                        <?php
                        $q1=$db->query("SELECT * FROM recipient_registration ORDER BY id DESC LIMIT 1");
                        $r2=$q1->fetch(PDO::FETCH_OBJ);
                        $q=$db->query("SELECT * FROM donor_registration");
                        while($r1=$q->fetch(PDO::FETCH_OBJ))
                        {
                            if($r1->bgroup==$r2->bgroup)
                        {

                        
                        ?>
                 <tr>

                     <td><center><?= $r1->name; ?></center></td>
                     <td><center><?= $r1->age; ?></center></td>
                     <td><center><?= $r1->city; ?></center></td>
                     <td><center><?= $r1->email; ?></center></td>
                     <td><center><?= $r1->address; ?></center></td>
                     <td><center><?= $r1->bgroup; ?></center></td>
                     <td><center><?= $r1->mno; ?></center></td>
                 </tr> 
                 <?php
                 }
                }
                 ?>
                </table>
            </div></center>




		</div>
		
		
	</div>
   
</div>
</body>
</html>