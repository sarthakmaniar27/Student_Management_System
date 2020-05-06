
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap_css/bootstrap.min.css">
    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title> Student Management System</title>
    <style>
      h1{
    		font-weight: bold;
    		font-family: serif;
    		font-size: 70px;
    		color: yellow;
    		text-shadow: 8px 15px 15px black;
    	}
    	 a:link, a:visited {
		  background-color: #000066;
		  color: white;
		  padding: 14px 25px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		}

		a:hover, a:active {
		  background-color: darkblue;
}
		h3{
			text-align: right;
			margin-right: 20px;
			margin-top: 10px;
		}
		table{
			width: 40%;
			border: 2px solid black;
			color: white;
			margin-top: 40px;
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

		body{
			background-color: white;
			background-image:url('images/bgimg.jpg');
			background-size: cover;
		}
		
	</style>
  </head>
  <body>

  		

  	<h3><a href="login.php" target="_blank">Admin Login</a></h3>
    
	<h1 align="center">Student Management System</h1>

  <form action="index.php" method="post">
	<table align="center" border="1">
		<tr>
			
			<th colspan="2" style="color: yellow;">Student Information</th>
		</tr>
		<tr>
			<td align="left">Choose Standard</td>
			<td>
				<select name="std" required>
					<option value="1">1st</option>
					<option value="2">2nd</option>
					<option value="3">3rd</option>
					<option value="4">4th</option>
					<option value="5">5th</option>
					<option value="6">6th</option>
					<option value="7">7th</option>
					<option value="8">8th</option>
					<option value="9">9th</option>
					<option value="10">10th</option>
				</select>
			</td>
		</tr>
		<tr>
			<td align="left">Enter Roll number</td>
			<td>
				<input type="text" name="rollno" required>
			</td>
		</tr>
		<tr>
			<th colspan="2" ><input type="submit" name="submit" value="Show Information" style="font-size: 20px;"></th>
		</tr>
	</table>
  </form>




    <!-- Optional JavaScript -->
    <!-- jQuery first,then Bootstrap JS -->
    <script src="bootstrap_js/jquery.js"> </script>
    <script src="bootstrap_js/bootstrap.min.js"> </script>
  </body>
</html>

<!--PHP Code starts-->
<?php

if(isset($_POST['submit']))
{
	$standard = $_POST['std'];
	$rollno = $_POST['rollno'];
	include('database_connectivity.php');
	include('function.php');

	showdetails($standard,$rollno);
}

?>




<!--
<!DOCTYPE html>
<html lang="en_US">
<head>
	<meta charset="utf-8">
	<title> Student Management System</title>
	<style>
		h3{
			text-align: right;
			margin-right: 20px;
		}
		table{
			width: 50%;
			border: "1";
		}
	</style>
</head>
<body>
	<h3><a href="login.php"> Admin Login</a></h3>
	<h1 align="center"> Welcome to Student Management System</h1>

  <form action="index.php" method="post">
	<table align="center" border="1">
		<tr>
			<td colspan="2" align="center">Student Information</td>
		</tr>
		<tr>
			<td align="left">Choose Standard</td>
			<td>
				<select name="std" required>
					<option value="1">1st</option>
					<option value="2">2nd</option>
					<option value="3">3rd</option>
					<option value="4">4th</option>
					<option value="5">5th</option>
					<option value="6">6th</option>
					<option value="7">7th</option>
					<option value="8">8th</option>
					<option value="9">9th</option>
					<option value="10">10th</option>
				</select>
			</td>
		</tr>
		<tr>
			<td align="left">Enter Roll number</td>
			<td>
				<input type="text" name="rollno" required>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Show Information"></td>
		</tr>
	</table>
  </form>

</body>
</html>

-->







