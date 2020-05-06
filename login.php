<?php
session_start();
if(isset($_SESSION['uid'])) //only one time user login
{
	header("location: admin/admindash.php");
}

?>
<!DOCTYPE html>
<html lang="en_US">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title> Admin Login</title>
	<style>
		h1{
			text-align: center; 
			font-size: 50px;
			font-weight: bold;
    		font-family: serif;
    		color: yellow;
    		text-shadow: 8px 15px 15px black;
		}
		body{
			background-color: white;
			background-image:url('images/bgimg.jpg');
			background-size: cover;
		}
		

.input-container {
  display: -ms-flexbox; 
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #080d36;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid #0033cc;
}

.btn  {
  background-color: #080d36;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

a:link, a:visited {
        background-color: #0033cc;
        color: white;
        padding: 15px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

      a:hover, a:active {
        background-color: blue;
    }
	</style>
</head>
<body>
	<!--<h1>Admin Login</h1>
	<form action="login.php" method="post">
		<table align="center">
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> 
				<input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form> -->
	
	<form action="login.php" method="post" style="max-width:500px;margin:auto;">
		<br><br><br>
		<h1>Admin Login</h1>
		<div class="input-container">
            <i class="fa fa-user icon"></i>
		 <input class="input-field" type="text" placeholder="Enter username"  name="uname" required><br><br>	
		</div>

		<div class="input-container">
			<i class="fa fa-key icon"></i>
		  <input class="input-field" type="password" placeholder="Enter password"  name="pass" required><br><br>		
		</div>
		<button type="submit" name="login" class="btn"> Login </button>
	</form>

</body>
</html>

<?php
include('database_connectivity.php');

if(isset($_POST['login']))
{
	$username = $_POST['uname'];
	$password = $_POST['pass'];
	$qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password';";
	$result = mysqli_query($conn,$qry);
	$row = mysqli_num_rows($result); //will give number of rows matched with the given query
	if($row < 1)
	{
		?>
		 <script>
			alert('Username or Password not matched!!');
			header("location: login.php");
		 </script>
		<?php
	}
	else
	{
		$data = mysqli_fetch_assoc($result);
		$id = $data['id'];
		echo "id = ".$id;


		$_SESSION['uid'] = $id; //uid is a session variable
		header("location: admin/admindash.php");
	}

}


?>