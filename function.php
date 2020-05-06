<?php

function showdetails($standard,$rollno)
	{
		include('database_connectivity.php');
		$sql = "SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standard'";
		$run = mysqli_query($conn,$sql);

		if(mysqli_num_rows($run) > 0)
		{
			$data = mysqli_fetch_assoc($run);
			?>
			<table border="1" style="width:80%; margin-top: 20px;" align="center">
				<tr>
					<th colspan="3">Student Details</th>
				</tr>
				<tr>
					<th rowspan="5"><img src="dataimg/<?php echo $data['image']?>" style="max- height:300px; max-width:250px "></th>


					<th>Roll Number</th>
					<td><?php echo $data['rollno'];?></td>
				</tr>
				<tr>
					
					<th>Name</th>
					<td><?php echo $data['name'];?></td>
				</tr>
				<tr>
				
					<th>Standard</th>
					<td><?php echo $data['standard'];?></td>
				</tr>
				<tr>
				
					<th>Phone number</th>
					<td><?php echo $data['phone'];?></td>
				</tr>
				<tr>
				
					<th>City</th>
					<td><?php echo $data['city'];?></td>
				</tr>

			</table> 

			<?php
		}
		else
		{
			echo "<script> alert('No Student Found!');</script>";
		}
	}
?>