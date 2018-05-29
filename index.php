<!DOCTYPE html>
<html>
<head>
	<title>SMS</title>
	<link href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9oqve-bDawG3xGiCCjTfB5qtlvqNQ2hV7uh46-1CSbw4lBaO4ww" rel="icon" />

</head>
<body background="images/bg.jpg">
<h3 align="right" style="margin-right: 20px"><a href="login.php">Admin Login</a></h3>
<h1 align="center">Welcome to Student Management System</h1>

<form action="index.php" method="post">
<table style="width: 30%" align="center" border="5">
	
<tr>
	<td colspan="2" align="center" style="background-color: black;"><b style="color: white;">Student Information</b></td>
</tr>
<tr>
   <td align="left"><i>Choose your class</i></td>
   <td>
   	
   	<select name="std" required>
   		<option value="1">Class 1</option>
   		<option value="2">Class 2</option>
   		<option value="3">Class 3</option>
   		<option value="4">Class 4</option>
   		<option value="5">Class 5</option>
   		<option value="6">Class 6</option>

   		
   		</select>

   </td>	
 </tr>
 <tr>
 	 <td><i>Enter your Roll Number :</i></td>
 	 <td><input type="number" name="rollno" required></td>
 </tr>
 	 
<tr>
	<td colspan="2" align="center"><input type="submit" name="submit" value="show Info"></td>
	
</tr>

</table>	
	
</form>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
   $standerd = $_POST['std'];
   $rollno = $_POST['rollno'];

   include('dbcon.php');
   include('function.php');

   showdetails($standerd,$rollno);

}

?>


