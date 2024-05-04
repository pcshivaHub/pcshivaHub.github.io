<html>
<head>
</head>

<body>
<?php
session_start();
$user_name = $_POST["username"];
$user_email = $_POST["useremail"]
$user_id = $_POST["userid"];
$user_pwd = $_POST["userpwd"];

$servername = "localhost";
$username = "admin";
$password = "admin123";
$dbname = "userdb";

$sql= "INSERT INTO registration (user_name, user_email, user_id, user_pwd)
			   VALUES ('".$user_name ."',".
						"'".$user_email ."',".
						"'".$user_id ."',".
						"'".$user_pwd ."');";

		echo $sql;
			
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
?>
</body>
</html>