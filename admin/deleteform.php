<?php	
include('../database_connectivity.php');

	 $id = $_REQUEST['sid'];
	 $qry = "DELETE FROM `student` WHERE `id` = '$id';";
	 $run = mysqli_query($conn,$qry);

	 if($run == true)
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

