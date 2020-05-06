<?php

session_start();

session_destroy(); //This function will destroy all the session variables.

header("location: ../login.php");
?>