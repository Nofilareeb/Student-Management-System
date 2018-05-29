<?php

session_start();

if(isset($_SESSION['uid']))
{

	echo "";
}
else
{
	header('location: ../login.php');
}

?>
<?php
include('header.php');
include('titlehead.php');
?>
<br>
<br>
<table align="center">
<form action="deletestudent.php" method="post">

	<tr>
		<th>Enter Class:</th>
		<td><input type="number" name="standerd"placeholder="Enter Class" required="required" />
	<th>Enter Student Name :</th>

<td><input type="text" name="stuname"placeholder="Enter Student Name" required="required" /></td>
<td colspan="2" style="background-color:blue";><input type="submit" name="submit" value="Search"></td>
</tr>
</form>
</table>
<table align="center" width="80%" border="1" style="margin-top: 20px;">
	<tr style="background-color:#000; color:#fff;">
		<th><i>No</i></th>
        <th><i>Image</i></th>
        <th><i>Name</i></th>
        <th><i>Rollno</i></th>
        <th><i>Edit</i></th>
	</tr>

	<?php
if (isset($_POST['submit']))
{
	include('../dbcon.php');
     $standerd = $_POST['standerd'];
     $name = $_POST['stuname'];


	$sql = "SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%'";
	$run =mysqli_query($con,$sql);

	if (mysqli_num_rows($run)<1) {
		echo "<tr><td colspan='5'>No Records Found</td></tr>";
	}
  else{
  	$count=0;
  	  while ($data=mysqli_fetch_assoc($run))
  	  {
  	  	$count++;
  	  	?>
  	  	<tr align="center" bgcolor="white">
  	  	<td><?php echo $count; ?></td>
		<td><img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px;"/></td>
        <td><?php echo $data['name'];?></td>
        <td ><?php echo $data['rollno'];?></td>
        <td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
	</tr>

     <?php
  	  }
  }
}



?>
</table>
