<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bottom.css">
    <link rel="shortcut icon" href="icon.png">
    <title>Dream Homes Viewing</title>
</head>
<body>
	
</body>
</html>
<?php
$Clientnumber = $_POST['Clientnumber'];
$Propertynumber = $_POST['Propertynumber'];
$Date = $_POST['Date'];
$conn = new mysqli('localhost','root','','dreamhome');
if($conn->connect_error)
{
	die('Connection Failed'.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("insert into table6(Clientnumber, Propertynumber, Date)
		values(?,?,?)");
	$stmt->bind_param("iis",$Clientnumber,$Propertynumber,$Date);
	$stmt->execute();
	echo "<body><h1><center>Registration Successfull.</center></h1></body>";
}
?>