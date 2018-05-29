<?php

session_start();
if(isset($_SESSION['uid']))
{
  header('location:admin/admindash.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login page</title>
	<link href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9oqve-bDawG3xGiCCjTfB5qtlvqNQ2hV7uh46-1CSbw4lBaO4ww" rel="icon" />

</head>
<body background="images/bg.jpg">
	<h2 align="center" style="color:blue;">ADMIN LOGIN</h2>
<form action="login.php" method="post">
<table align="center" border="1">
	<tr>

    <td>Username :</td>
    <td><input type="text" name="uname" placeholder="Enter username"  required></td>		

	</tr>
	<tr>

    <td>Password :</td>
    <td><input type="Password" name="pass" placeholder="Enter password"  required></td>		

	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="login" value="Login">
		
</tr>
	

</table>	

</form>
</body>
</html>

<?php

include('dbcon.php');

if (isset($_POST['login']))
{
  $username = $_POST['uname'];
  $password = $_POST['pass'];

  $query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";

 $run = mysqli_query($con,$query);
 $row = mysqli_num_rows($run);

 if($row <1)
 {
  
  ?>
 <script>
   alert('Username or Password not match');
   window.open('login.php','_self');
 </script> 

 <?php

}
else
{
  $data = mysqli_fetch_assoc($run);

  $id = $data['id'];
  echo "id = ".$id;


  $_SESSION['uid']=$id;
  header('location:admin/admindash.php');
}

}

?>
