<!DOCTYPE html>
<html>
<head>
    <title>PLMun EVote: Your Voice, Your Choice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <form action="User.php" method="post">
    <DIV class="center">
    <div class="container text-center">
    <span class="border border-3">
   
    <br>
    <img src="plmun.jpg" alt="PLMun Evote" class="image">
    <h1>PLMun Evote</h1>
    <label for="Email" class="form-label">Email</label>
    <input type="text" placeholder="Enter Email" class="form-control">
    <label for="Password" class="form-label">Password</label>
    <input type="password" placeholder="Password" id="inputPassword5" class="form-control">
    
    <button type="submit">Log In</button>
    <br><br><br>
    <a href="add_account.html">Sign Up</a>
</span></div></div>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbEvote";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
crossorigin="anonymous"></script>
</body>
</html>