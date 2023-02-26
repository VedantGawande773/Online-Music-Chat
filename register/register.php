<?php

require "../dbcon.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$INSERT = "INSERT into users(email,username,password) values('$email','$username','$password')";

$RESULT = $conn->query($INSERT);

$conn->close();
header("Location:../login/index.php");


?>