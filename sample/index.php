<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My form</title>
</head>
<body>
<h1>Form</h1>

	

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
	<a href="logout.php">Logout</a>
</body>
</html>