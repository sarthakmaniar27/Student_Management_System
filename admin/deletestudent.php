<?php

session_start();

	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	
	else //you cannnot go to admin page without entering username and password, if you try to visit admindash.php directly then it will redirect you to login.php page.
	{
		header("location: ../login.php");
	}
?>

<?php
	include('titlehead.php');
?>
<!--Till above common code to admin pages!!-->
<!DOCTYPE html>
<html lang="en_US">
<head>
	<meta charset="utf-8">
	<title> Student Managment System</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style>
		h1{
    		font-weight: bold;
    		font-family: serif;
    		font-size: 40px;
    		color: yellow;
    		text-shadow: 8px 15px 15px black;
    	}
    	body{
			background-color: white;
			background-image:url('../images/bgimg.jpg');
			background-size: cover;
		}

		table{
			width: 40%;
			border: 2px solid black;
			color: white;
			margin-top: 40px;
			border-collapse: collapse;
		}
		th{
			border: 2px solid black;
			text-align: center;
			background-color: #080d36;
			padding: 15px;
			color: yellow;
			font-family: sans-serif;
			font-size: 20px;
		}
		
		td{
			height: 60px;
			padding: 15px;
			font-size: 20px;
			text-align: left;
			font-family: sans-serif;
			background-color: #494a4d;
		}
	</style>
</head>
<body>

<table align="center" style="margin-top: 20px;">
	<form action="deletestudent.php" method="post">
	<tr>
		<th>Standard</th>
		<td><input type="number" name="standard" style="font-size: 20px;" placeholder="Enter Standard" required="required"></td>
 
		<th>Student Name</th>
		<td><input type="text" name="sname" style="font-size: 20px;" placeholder="Enter Student Name" required="required"></td>

		<td><input type="submit" style="font-size: 20px;" name="submit" value="Search"></td>
	</tr>
	</form>
</table>



<table align="center" width="80%" border="1" style="margin-top: 20px;">
	<tr style="background-color: #000; color: #fff">
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Roll Number</th>
		<th>Edit</th>
	</tr>



<?php

if(isset($_POST['submit']))
 {
	
	$standard = $_POST['standard'];
	$name = $_POST['sname'];
	include('../database_connectivity.php');
	$sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";
	$run = mysqli_query($conn,$sql); 
	//Now we'll fetch data
	if(!$run || mysqli_num_rows($run) < 1)
	{
		
		echo "<tr><td colspan='5'>No Records Found! </td></tr>";
	} 
	else
	{	
		$count = 0;
		while ($data = mysqli_fetch_assoc($run)) 
		{
			$count++;
			?>
				<tr style="text-align: center;">
				<td><?php echo $count; ?></td>
				<td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width: 100px;"/></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['rollno']; ?></td>
				<td><a href="deleteform.php?sid=<?php echo $data['id'];?>" >Delete</a></td>
				</tr>
			<?php
		}
    }
}

?>
</table>
</body>
</html>