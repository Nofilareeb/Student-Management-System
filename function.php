<?php

function showdetails($standerd,$rollno)
{
	include('dbcon.php');
	$sql = "SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standerd`='$standerd'";
	$run = mysqli_query($con,$sql);

	if(mysqli_num_rows($run)>0)
	{
		$data = mysqli_fetch_assoc($run);
		?>
		<br>
     <table align="center" border="2" style="width: 60%;">
     	<tr>
     		<th colspan="3" bgcolor="white";">STUDENT DETAILS</th>
     	</tr>
         <tr>
   	<td colspan="5" align="center"><img src="dataimg/<?php echo $data['image']; ?> " style="max-width:120px; max-height: 150px;"/></td>
   </tr>
   	<tr>
   	<th>Roll No</th>
   	<td><?php echo $data['rollno']; ?></td>
         </tr>
       <tr>
   
   	<th>Name</th>
   	<td><?php echo $data['name']; ?></td>
       </tr>
     <th>Class</th>
   	<td><?php echo $data['standerd']; ?></td>
       </tr>  
    <th>Parents Contact No</th>
   	<td><?php echo $data['pcont']; ?></td>
       </tr>

 </tr>  
    <th>City</th>
   	<td><?php echo $data['city']; ?></td>
       </tr>

     </table>

		<?php
	}
	else

		echo "<script>alert('No student found !');</script>";
	
}


?>