<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="mouse.css">
    <link rel="shortcut icon" href="icon.png">
    <title>Dream Homes Property for Rent</title>
</head>
<body>
	
</body>
</html>
<?php
$Propertynumber = $_POST['Propertynumber'];
$Street = $_POST['Street'];
$City = $_POST['City'];
$Postcode = $_POST['Postcode']; 
$Propertytype = $_POST['Propertytype'];
$Room = $_POST['Room'];
$Rent = $_POST['Rent'];
$Ownerno = $_POST['Ownerno']; 
$Staffno = $_POST['Staffno'];
$Branchno = $_POST['Branchno'];
$conn = new mysqli('localhost','root','','dreamhome');
if($conn->connect_error)
{
	die('Connection Failed'.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("insert into table4(Propertynumber, Street, City, Postcode, Propertytype, Room, Rent, Ownerno, Staffno, Branchno)
		values(?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("issisiiiii",$Propertynumber,$Street,$City,$Postcode,$Propertytype,$Room,$Rent,$Ownerno,$Staffno,$Branchno);
	$stmt->execute();
	echo "<body><h1><center>Registration Successfull.</center></h1></body>";
}
?>