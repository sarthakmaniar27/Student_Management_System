<?php	
include('../database_connectivity.php');

	 $id = $_REQUEST['sid'];
	 $qry = "DELETE FROM `student` WHERE `id` = '$id';";
	 $run = mysqli_query($conn,$qry);
	 $run1 = mysqli_query($conn1,$qry);
	 $run2 = mysqli_query($conn2,$qry);

	 if($run == true && $run1 == true && $run2 == true)
	 {
	 	?>
		 <script>
			alert('Data Deleted Successfully!');	
			window.open('deletestudent.php','_self');
		 </script>
		<?php
	 }
	 else{
  			echo("Error: ".mysqli_error($conn));
         }
?>

