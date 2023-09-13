<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="floor.css">
    <link rel="shortcut icon" href="icon.png">
    <title>Dream Homes Registration</title>
</head>
<body>
	
</body>
</html>
<?php
$email = filter_input(INPUT_POST, 'email');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$cfpassword = filter_input(INPUT_POST, 'cfpassword'); 
if (!empty($email)) {
	if (!empty($username)) {
		if (!empty($password)) {
			if (!empty($cfpassword)) {
				$host = "localhost";
			    $dbusername = "root";
				$dbpassword = "";
				$dbname = "dreamhome";
				$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
				if (mysqli_connect_error()) {
					die('Connect Error('.mysqli_connect_error().')' . mysqli_connect_error());
	            }
                else {
					$sql = "INSERT INTO registration (email, username, password, cfpassword) values ('$email', '$username', '$password', '$cfpassword')";
					if($conn->query($sql)) {
						echo "<body><h1><center>New record is inserted Successfully - Registration Successfull.</center></h1></body>";
					}
					else {
						echo "Error: ". $sql . "<br>" . $conn->error;
					}
                    $conn->close();					
				}
			}
            else {
                echo "cfpassword should not be empty";
				die();
            }
		}
        else {
			echo "password should not be empty";
			die();
		}
    }
    else {
		echo "username should not be empty";
		die();
	}	
}
else {
	echo "email should not be empty";
	die();
}	
?>