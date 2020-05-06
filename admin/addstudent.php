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
			border: 3px solid black;
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
		input[type=text],input[type=number],input[type=file]{
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: 1px solid #555;
		  outline: none;
		}

		input[type=text]:focus,input[type=number]:focus,input[type=file]:focus{
		  background-color: lightblue;
		}
		input[type=text]::placeholder,input[type=number]::placeholder{
			color: red;
		}
		
	</style>
</head>
<body>
	<?php
	include('titlehead.php');
    ?>

<form method="post" action="addstudent.php" enctype="multipart/form-data">
	 <table border="1" align="center" style="width: 70%; margin-top: 40px;">
	 	<tr>
	 		<th>Roll Number</th>
	 		<td><input type="text" name="rollno" placeholder="Enter Roll Number" required></td>
	 	</tr>
	 	<tr>
	 		<th>Name</th>
	 		<td><input type="text" name="name" placeholder="Enter Full Name" required></td>
	 	</tr>
	 	<tr>
	 		<th>City</th>
	 		<td><input type="text" name="city" placeholder="Enter City" required></td>
	 	</tr>
	 	<tr>
	 		<th>Phone number</th>
	 		<td><input type="text" name="phone" placeholder="Enter Phone Number" required></td>
	 	</tr>
	 	<tr>
	 		<th>Standard</th>
	 		<td><input type="number" name="standard" placeholder="Enter Standard" required></td>
	 	</tr>
	 	<tr>
	 		<th>Photo</th>
	 		<td><input type="file" name="simg" required></td>
	 	</tr>
	 	<tr>
	 		<th colspan="2" align="center"><input type="submit" name="submit" value="Submit" style="font-size: 30px;"required></th>
	 	</tr>	 	
	 </table>	
</form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
	 include('../database_connectivity.php');

	 $rollno = $_POST['rollno']; 
	 $name = $_POST['name'];
	 $city = $_POST['city'];
	 $phone = $_POST['phone'];
	 $standard = $_POST['standard'];
	 $imagename = $_FILES['simg']['name'];
	 $tempname = $_FILES['simg']['tmp_name'];
	 
	 move_uploaded_file($tempname, "../dataimg/$imagename");
	 
	 $qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `phone`, `standard`,`image`) VALUES ('$rollno','$name','$city','$phone','$standard','$imagename')";
	 $run = mysqli_query($conn,$qry);

	 if($run == true)
	 {
	 	?>
		 <script>
			alert('Data Inserted Successfully!');
		 </script>

		<?php
	 }
	 else{
  			echo("Error: ".mysqli_error($conn));
         }
}
?>
	     