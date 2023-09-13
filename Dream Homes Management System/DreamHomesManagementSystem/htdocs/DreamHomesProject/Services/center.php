<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="center.css">
    <link rel="shortcut icon" href="icon.png">
    <title>Dream Homes Private Owner</title>
</head>
<body>
	
</body>
</html>
<?php
$Ownernumber = filter_input(INPUT_POST,'Ownernumber');
$Firstname = filter_input(INPUT_POST,'Firstname');
$Lastname = filter_input(INPUT_POST,'Lastname');
$Address = filter_input(INPUT_POST,'Address');
$Telephonenumber = filter_input(INPUT_POST,'Telephonenumber');
if (!empty($Ownernumber)) {
    if (!empty($Firstname)) {
	    if (!empty($Lastname)) {
	        if (!empty($Address)) {
			    if(!empty($Telephonenumber)) { 
		            $host = "localhost";
		            $dbusername = "root";
		            $dbpassword = "";
		            $dbname = "dreamhome";
		            $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
		            if (mysqli_connect_error()) {
		                die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
			        }
                    else {
                        $sql = "INSERT INTO table3(Ownernumber, Firstname, Lastname, Address, Telephonenumber) values ('$Ownernumber', '$Firstname', '$Lastname', '$Address', '$Telephonenumber')";
                        if ($conn->query($sql)) {
                            echo "<body><h1><center>Registration Successfull.</center></h1></body>";
                        }
                        else { 
                            echo "Error: ". $sql . "<br>" . $conn->error;
                        }
                        $conn->close();
                    }
                }
                else {
                    echo "Telephonenumber should not be empty";
                    die ();
                }
            }
            else {
                echo "Address should not be empty";
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
    echo "Ownernumber should not be empty";
    die();
}
?>  