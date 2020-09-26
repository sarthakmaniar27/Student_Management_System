<?php

$conn = mysqli_connect('localhost','root','','Student_Management_System');
$conn1 = mysqli_connect('localhost','root','','Replicated_sms');
$conn2 = mysqli_connect('sql12.freemysqlhosting.net','sql12366578','BW7pMbPgJ2','sql12366578');
if (!$conn && !$conn1 && !$conn2) {
 die("Connection failed: " . mysqli_connect_error());
}
/*
if($conn == false)
{
	echo "Connection is not done!";
}*/
/*
else
{
	echo "Connect done successfully!";
}
*/
?>