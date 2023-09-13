<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="connect.css">
    <link rel="shortcut icon" href="icon.png">
    <title>Dream Homes Branch</title>
</head>
<body>
	
</body>
</html>
<?php
$Branchnumber = $_POST['Branchnumber'];
$Street = $_POST['Street'];
$City = $_POST['City'];
$Postcode = $_POST['Postcode']; 
$conn = new mysqli('localhost','root','','dreamhome');
if($conn->connect_error)
{
	die('Connection Failed'.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("insert into table1(Branchnumber, Street, City, Postcode)
		values(?,?,?,?)");
	$stmt->bind_param("issi",$Branchnumber,$Street,$City,$Postcode);
	$stmt->execute();
	echo "<body><h1><center>Registration Successfull.</center></h1></body>";
}
?>