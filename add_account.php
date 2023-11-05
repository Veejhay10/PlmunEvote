<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbevote";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Bday = $_POST['Bday'];
$Age = $_POST['Age'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$sql = "INSERT INTO tbldata (Fname, Lname, Bday, Age, Email, Password) 
VALUES ('$Fname', '$Lname', '$Bday', '$Age', '$Email', '$Password')";

if ($conn->query($sql) === TRUE) {
    echo "Your Account Successfully Created";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br><br>
<a href="add_account.html">Add Another Account</a>
<a href="index.php">Log in</a>