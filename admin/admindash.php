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
    	a.first{
    		font-size: 30px;

    	}
		

		a.first:link, a.first:visited {
		  background-color: #080d36;
		  color: white;
		  padding: 14px 25px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		}

		a.first:hover, a.first:active {
		  background-color: red;
		}

		body{
			background-color: white;
			background-image:url('../images/bgimg.jpg');
			background-size: cover;
			}
		table{
			width: 35%;
			border: 2px solid black;
			color: white;
			margin-top: 80px;
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
			background-color: yellow;
		}
		td.first{
			font-size: 20px;
			color: black;
			font-weight: bold;
		}
	</style>
</head>
<body>

	<div class="admintitle" align="center">
		<h3><a id="first" href="logout.php" style="float:right; margin-right:50px;color:white; font-size:20px;">Logout</a></h3>

		<h1>Welcome to the Dashboard</h1>
		
	</div>     
	<div> 
		<table align="center">
			<tr>
				<td class="first">1.</td><td><a class="first" href="addstudent.php">Insert Student Details</a></td>
			</tr>
			<tr>
				<td class="first">2.</td><td><a class="first" href="updatestudent.php">Update Student Details</a></td>
			</tr>
			<tr>
				<td class="first">3.</td><td><a class="first" href="deletestudent.php">Delete Student Details</a></td>
			</tr>

		</table>
		
	</div>
</body>
</html>