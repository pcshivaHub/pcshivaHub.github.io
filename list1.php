<!DOCTYPE html>
<head>
</head>

<body style="background:#FFF;">

<script>

</script>
<?php
session_start();

//echo "Login status:".$_SESSION['loggedin'];

$user_id=0;
$user_name="";

//require 'ihsbioDBconn.php';

$servername = "localhost";
$username = "admin";
$password = "admin123";
$dbname = "userdb";

$sql="SELECT * FROM registration ORDER BY user_id ";

//	echo $sql;


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$result = $conn->query($sql);
?>
<form "<?php $_SERVER["PHP_SELF"] ?>" method = "POST">
  <div id="mainDiv">
	<table border="1">
        <tr><td><User ID
            <td>User Name
        </tr>
        <?php
			if ($result && $result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
        ?>
                    <tr>
		<?php
					$user_id= $row["user_id"];
					$user_name = $row["user_name"];
					$user_pwd=$row["user_pwd"];
                    if($user_id=="")
                        continue

		?>			<td> <?php echo $user_id ?>
		 			<td> <?php echo $user_name ?>
					 <td> <?php echo $user_pwd ?>
                </tr>
									
              	<?php
				}
			}
		$conn->close();
		?>	
	</table>
    </div>

 </form>
</body>
</html>
