<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="left.css">
    <link rel="shortcut icon" href="icon.png">
    <title>Dream Homes Client</title>
</head>
<body>
	
</body>
</html>
<?php
$Clientno = $_POST['Clientno'];
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Telephonenumber = $_POST['Telephonenumber']; 
$Preftype = $_POST['Preftype'];
$Maximumrent = $_POST['Maximumrent'];
$conn = new mysqli('localhost','root','','dreamhome');
if($conn->connect_error)
{
	die('Connection Failed'.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("insert into table5(Clientno, Firstname, Lastname, Telephonenumber, Preftype, Maximumrent)
		values(?,?,?,?,?,?)");
	$stmt->bind_param("issisi",$Clientno,$Firstname,$Lastname,$Telephonenumber,$Preftype,$Maximumrent);
	$stmt->execute();
	echo "<body><h1><center>Registration Successfull.</center></h1></body>";
}
?>