<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="mental.css">
    <link rel="shortcut icon" href="icon.png">
    <title>Dream Homes Service Registration</title>
</head>
<body>
	
</body>
</html>
<?php
$Clientno = $_POST['Clientno'];
$Branchno = $_POST['Branchno'];
$Staffno = $_POST['Staffno'];
$Datejoined = $_POST['Datejoined']; 
$conn = new mysqli('localhost','root','','dreamhome');
if($conn->connect_error)
{
	die('Connection Failed'.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("insert into table7(Clientno, Branchno, Staffno, Datejoined)
		values(?,?,?,?)");
	$stmt->bind_param("iiis",$Clientno,$Branchno,$Staffno,$Datejoined);
	$stmt->execute();
	echo "<body><h1><center>Registration Successfull.</center></h1></body>";
}
?>