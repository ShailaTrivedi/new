<html>
<body>
<?php

//Create Connection
$conn = new mysqli('localhost','root','');

//Check Connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "DB connected successfully";


//this will select the Database sample_db	

mysqli_select_db($conn,"sample_db");

echo "\n DB is selected as Test successfully";

//create INSERT query

$sql="INSERT INTO sample_table (username,password) VALUES ('$_POST[username]','$_POST[password]')";

if ($conn->query($sql) == TRUE) {
	
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
</body>
</html>