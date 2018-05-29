<?php

session_start();

if(isset($_SESSION['uid']))
{

	echo "";
}
else{
	header('location: ../login.php');
}

?>
<?php
include('header.php');
?>
 
 <div class="admintitle" align="center">
 	<h1>Welcome to Admin Dashboard</h1>
 </div>
 	<h3><a href="logout.php" style="float: right;margin-right:30px;color: blue;font-size: 20px ">Logout</a></h3>
<div align ="center">
	
 <table class="dashboard" border="1" style="width:30%">
 	<tr>
 		<td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
 	</tr>
 	<tr>
 		<td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
 	</tr>
<tr>
 		<td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
 	</tr>

 </table>

</div>
