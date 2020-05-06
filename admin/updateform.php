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
	include('header.php');
	include('titlehead.php');
	include('../database_connectivity.php'); 

	$sid = $_GET['sid'];
	$sql = "SELECT * FROM `student` WHERE `id` = '$sid'";
	$run = mysqli_query($conn,$sql);
	$data = mysqli_fetch_assoc($run);
?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
	 <table border="1" align="center" style="width: 70%; margin-top: 40px;">
	 	<tr>
	 		<th>Roll Number</th>
	 		<td><input type="text" name="rollno" value="<?php echo $data['rollno']?>" required></td>
	 	</tr>
	 	<tr>
	 		<th>Name</th>
	 		<td><input type="text" name="name"  value="<?php echo $data['name']?>" required></td>
	 	</tr>
	 	<tr>
	 		<th>City</th>
	 		<td><input type="text" name="city" value="<?php echo $data['city']?>" required></td>
	 	</tr>
	 	<tr>
	 		<th>Phone number</th>
	 		<td><input type="text" name="phone" value="<?php echo $data['phone']?>" required></td>
	 	</tr>
	 	<tr>
	 		<th>Standard</th>
	 		<td><input type="number" name="standard" value="<?php echo $data['standard']?>" required></td>
	 	</tr>
	 	<tr>
	 		<th>Photo</th>
	 		<td><input type="file" name="simg" required></td>
	 	</tr>
	 	<tr>
	 		<td colspan="2" align="center">
	 			<input type="hidden" name="sid" value="<?php echo $data['id'];?>">
	 			<input type="submit" name="submit" value="Submit" required></td>
	 	</tr>	 	
	 </table>	
</form>
</body>
</html>