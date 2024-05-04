<html>
<head>
</head>

<body>
<?php

echo "welcome to php";
//session_start();
$movie_id=$_GET["movie_id"];
$movie_name=$_GET["movie_name"];

$severname="localhost";
$username="movie_admin";
$password="movie123";
$dbname="MDB";



$sql="INSERT INTO registration (movie_id, movie_name)
    VALUES('".$movie_id."',". "'".$movie_name."')";
echo $sql;
/*
    //Create connection
    $conn=new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if($conn->query($sql)==TRUE {
        echo "New record created successfully";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    */
?>

<?php
  echo "welcome to php";
?>
</body>
</html