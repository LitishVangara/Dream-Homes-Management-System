<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="syntax.css">
    <link rel="shortcut icon" href="icon.png">
    <title>Dream Homes Staff</title>
</head>
<body>
	
</body>
</html>
<?php
$Staffnumber = filter_input(INPUT_POST, 'Staffnumber');
$Firstname = filter_input(INPUT_POST, 'Firstname');
$Lastname = filter_input(INPUT_POST, 'Lastname');
$Oposition = filter_input(INPUT_POST, 'Oposition');
$Gender = filter_input(INPUT_POST, 'Gender');
$DOB = filter_input(INPUT_POST, 'DOB');
$Salary = filter_input(INPUT_POST, 'Salary');
$Branchnumber = filter_input(INPUT_POST, 'Branchnumber'); 
if (!empty($Staffnumber)) {
	if (!empty($Firstname)) {
		if (!empty($Lastname)) {
			if (!empty($Oposition)) {
				if (!empty($Gender)) {
					if (!empty($DOB)) {
						if (!empty($Salary)) {
							if (!empty($Branchnumber)) {
								$host = "localhost";
			                    $dbusername = "root";
				                $dbpassword = "";
				                $dbname = "dreamhome";
				                $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
				                if (mysqli_connect_error()) {
					                die('Connect Error('.mysqli_connect_error().')' . mysqli_connect_error());
	                            }
                                else {
					                $sql = "INSERT INTO table2 (Staffnumber, Firstname, Lastname, Oposition, Gender, DOB, Salary, Branchnumber) values ('$Staffnumber', '$Firstname', '$Lastname', '$Oposition', '$Gender', '$DOB', '$Salary', '$Branchnumber')";
					                if($conn->query($sql)) {
						                echo "<body><h1><center>Registration Successfull.</center></h1></body>";
					                }
					                else {
						                echo "Error: ". $sql . "<br>" . $conn->error;
					                }
                                    $conn->close();					
				                }
			                }
                            else {
                                echo "Branchnumber should not be empty";
				                die();
                            }
		                }
                        else {
			                echo "Salary should not be empty";
			                die();
		                }
                    }
                    else {
		                echo "DOB should not be empty";
		                die();
	                }	
                }
                else {
	                echo "Gender should not be empty";
	                die();
                }
            }
            else {
				echo "Oposition should not be empty";
				die();
			}
        }
        else {
			echo "Lastname should not be empty";
			die();
		}
    }
    else {
		echo "Firstname should not be empty";
		die();
	}
}
else {
	echo "Staffnumber should not be empty";
	die();
}	
?>