<?php
	session_start();
	if(isset($_SESSION['status'])){

?>
 <!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>

	<table border="1" align="center" width="100%">
 		<tr height="150px">
 			<td width="150px">
				<img src="images/logo.png" width="200px">
			</td>
 			<td align="right">
 				Logged in as
 				<a href="">
 				<?php $name=$_SESSION['username']; echo $name; ?>	
 				</a> |
 				<a href="logout.php">Logout</a>
 			</td>
	 	</tr>
	 	<tr height="250px">
	 		<td>
	 			Account
	 			<ul>
	 				<li><a href="">Dashboard</a></li>
	 				<li><a href="viewProfile.php">View Profile</a></li>
	 				<li><a href="editProfile.php">Edit Profile</a></li>
	 				<li><a href="profilePicture.php">Change Profile Picture</a></li>
	 				<li><a href="changePassword.php">Changege Password</a></li>
	 				<li><a href="logout.php">Logout</a></li>
	 			</ul>
	 		</td>
	 		<td>
			<h3>Welcome <?php $name=$_SESSION['username']; echo $name;?></h3>
			</td>
	 	</tr>
		<tr height="40px">
			<td colspan="3" align="center">copyright@2017</td>
		</tr>
	</table>
</body>
</html>

<?php
	}
	else
	{
		header('location:login.html');
	}
?>