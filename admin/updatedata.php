<?php

if(isset($_POST['submit']))

{
	$id = $_POST['sid'];

include('../database_connectivity.php');

	 $rollno = $_POST['rollno']; 
	 $name = $_POST['name'];
	 $city = $_POST['city'];
	 $phone = $_POST['phone'];
	 $standard = $_POST['standard'];

	 $imagename = $_FILES['simg']['name'];
	 $tempname = $_FILES['simg']['tmp_name'];
	 
	 
	 move_uploaded_file($tempname, "../dataimg/$imagename");
	 
	 $qry = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `phone` = '$phone', `standard` = '$standard',`image` = '$imagename' WHERE `id` = $id;";
	 $run = mysqli_query($conn,$qry);

	 if($run == true)
	 {
	 	?>
		 <script>
			alert('Data Updated Successfully!');	
			window.open('updateform.php?sid=<?php echo $id;?>','_self');

		 </script>

		<?php
	 }
	 else{
  			echo("Error: ".mysqli_error($conn));
         }
}
?>