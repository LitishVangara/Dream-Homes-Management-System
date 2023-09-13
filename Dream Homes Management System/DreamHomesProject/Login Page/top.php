<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="top.css">
    <link rel="shortcut icon" href="icon.png">
    <title>Dream Homes Login</title>
</head>
<body>
	
</body>
</html>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$conn = new mysqli('localhost','root','','dreamhome');
if($conn->connect_error)
{
	die('Connection Failed'.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("insert into login(username, password)
		values(?,?)");
	$stmt->bind_param("ss",$username,$password);
	$stmt->execute();
	print "<body><h1><center>Login Successfull.</center></h1></body>";
}
?>	