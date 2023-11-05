<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbevote";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$sql = "Select * from tbluser";

if ($conn->query($sql) === TRUE) {
   
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>