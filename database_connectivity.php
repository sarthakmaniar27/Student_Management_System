<?php

//$conn = mysqli_connect('localhost','root','','Student_Management_System');
//$conn1 = mysqli_connect('localhost','root','','Replicated_sms');


//$conn = mysqli_connect('sql3.freemysqlhosting.net','sql3367473','9rIezusJsc','sql3367473');
//$conn1 = mysqli_connect('sql3.freemysqlhosting.net','sql3367473','9rIezusJsc','sql3367473');

$conn = mysqli_connect('sql12.freemysqlhosting.net','sql12367483','7IpCVZLSe1','sql12367483'); //bhargav
$conn1 = mysqli_connect('sql12.freemysqlhosting.net','sql12367484','zZiShGbvqa','sql12367484');   //kaustubh
$conn2 = mysqli_connect('sql12.freemysqlhosting.net','sql12366578','BW7pMbPgJ2','sql12366578'); //sarthak
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